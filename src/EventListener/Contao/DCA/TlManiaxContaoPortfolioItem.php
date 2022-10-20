<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoPortfolio\EventListener\Contao\DCA;

use Composer\InstalledVersions;
use Contao\CoreBundle\Slug\Slug;
use Contao\CoreBundle\Util\PackageUtil;
use Contao\DataContainer;
use Contao\Input;
use Contao\Message;
use Contao\StringUtil;
use Contao\System;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioCategory as TlManiaxContaoPortfolioCategoryEntity;
use Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioItem as TlManiaxContaoPortfolioItemEntity;
use Symfony\Component\HttpFoundation\RequestStack;
use Twig\Environment as TwigEnvironment;

class TlManiaxContaoPortfolioItem
{
    protected ManagerRegistry $registry;

    protected Slug $slugGenerator;

    protected RequestStack $requestStack;

    protected TwigEnvironment $twig;

    public function __construct(
        ManagerRegistry $registry,
        Slug $slugGenerator,
        RequestStack $requestStack,
        TwigEnvironment $twig
    ) {
        $this->registry = $registry;
        $this->slugGenerator = $slugGenerator;
        $this->requestStack = $requestStack;
        $this->twig = $twig;
    }

    public function onCategoryOptionsCallback(): array
    {
        $categoryRepository = $this->registry->getRepository(TlManiaxContaoPortfolioCategoryEntity::class);

        $categories = $categoryRepository->findAllPublished();

        $return = [];
        foreach ($categories as $category) {

            if (0 !== $category->getPid()) {
                $mainCategoryRepository = $this->registry->getRepository(TlManiaxContaoPortfolioCategoryEntity::class);
                $mainCategory = $mainCategoryRepository->find($category->getPid());

                $return[$category->getId()] = $mainCategory->getTitle() .': '.$category->getTitle();
            }else{
                $return[$category->getId()] = $category->getTitle();
            }
        }

        return $return;
    }

    public function onTypeOptionsCallback(): array
    {
        return array('text', 'video', 'image', 'gallery');
    }

    public function saveCallbackGlobal(DataContainer $dc): void
    {
        // Front end call
        if (!$dc instanceof DataContainer) {
            return;
        }

        if (!$dc->activeRecord) {
            return;
        }

        if (!empty(Input::post('published'))) {
            $itemRepository = $this->registry->getRepository(TlManiaxContaoPortfolioItemEntity::class);
            $item = $itemRepository->find($dc->activeRecord->id);
            $this->registry->getManager()->persist($item);
            $this->registry->getManager()->flush();
        }
    }

    public function onShowInfoCallback(DataContainer $dc = null): void
    {
        $GLOBALS['TL_CSS'][] = 'bundles/maniaxcontaoportfolio/dashboard.min.css';
        $info = $this->twig->render('@ManiaxContaoPortfolio/be_maniax_info.html.twig', [
            'version' => PackageUtil::getVersion('maniaxatwork/contao-portfolio-bundle'),
        ]);

        Message::addRaw($info);

        // Show correct palette for category
        if (Input::get('act') == 'edit'){
            $activeId = Input::get('id');

            $itemRepository = $this->registry->getRepository(TlManiaxContaoPortfolioItemEntity::class);
            $item = $itemRepository->find($activeId);

            if (null === $item || $item->getCategory() === null) {
                return;
            }

            $palette = $GLOBALS['TL_DCA'][$dc->table]['palettes']['default'];

            $categoryRepository = $this->registry->getRepository(TlManiaxContaoPortfolioCategoryEntity::class);

            $category = $categoryRepository->find($item->getCategory());

            switch ($category->getType()){
                case "text":
                    $palette = '{title_legend},title;{settings_legend},category,description;{expert_legend:hide},cssClass;{publish_legend},published,start,stop';
                    break;
                case "video":
                    $palette = '{title_legend},title;{settings_legend},category,videoUrl;{expert_legend:hide},cssClass;{publish_legend},published,start,stop';
                    break;
                case "image":
                    $palette = '{title_legend},title;{settings_legend},category,singleSRC,size,fullsize,overwriteMeta;{expert_legend:hide},cssClass;{publish_legend},published,start,stop';
                    break;
                case "gallery":
                    $palette = '{title_legend},title;{settings_legend},category,multiSRC,sortBy;{image_legend},size,fullsize,perRow;{expert_legend:hide},cssClass;{publish_legend},published,start,stop';
                    break;
            }

            $GLOBALS['TL_DCA'][$dc->table]['palettes']['default'] = $palette;
        }

    }

    public function getLanguages(): array
    {
        if (version_compare(InstalledVersions::getVersion('contao/core-bundle'), '4.13', '>=')) {
            return System::getContainer()->get('contao.intl.locales')->getLanguages();
        }

        return System::getLanguages();
    }

    public function labelCallback(array $row, string $label, DataContainer $dc, array $labels): string
    {
        $categories = [];
        $sCategories = $this->categoryOptionsCallback();
        $categoriesArr = StringUtil::deserialize($row['category']);
        foreach ($categoriesArr as $category) {
            $categories[] = $sCategories[$category];
        }

        $label = '<h2>'.$row['title'].'</h2>';
        $label .= implode(' | ', $categories);
        return $label;
    }
}
