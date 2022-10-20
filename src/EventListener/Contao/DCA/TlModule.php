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

use Contao\CoreBundle\Slug\Slug;
use Contao\DataContainer;
use Contao\Input;
use Contao\StringUtil;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioCategory;
use Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioItem as TlManiaxContaoPortfolioItemEntity;

class TlModule
{
    protected ManagerRegistry $registry;

    public function __construct(
        ManagerRegistry $registry
    ) {
        $this->registry = $registry;
    }

    public function onCategoryOptionsCallback(): array
    {
        $categoryRepository = $this->registry->getRepository(TlManiaxContaoPortfolioCategory::class);

        $categories = $categoryRepository->findAll();

        $return = [];
        foreach ($categories as $category) {

            if (0 !== $category->getPid()) {
                $mainCategoryRepository = $this->registry->getRepository(TlManiaxContaoPortfolioCategory::class);
                $mainCategory = $mainCategoryRepository->find($category->getPid());

                $return[$category->getId()] = $mainCategory->getTitle() .': '.$category->getTitle();
            }else{
                $return[$category->getId()] = $category->getTitle();
            }
        }

        return $return;
    }
}
