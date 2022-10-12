<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoJobs\Controller\Contao\FrontendModule;

use Contao\Config;
use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\ServiceAnnotation\FrontendModule;
use Contao\Environment;
use Contao\FrontendTemplate;
use Contao\ModuleModel;
use Contao\PageModel;
use Contao\StringUtil;
use Contao\System;
use Contao\Template;
use Doctrine\Persistence\ManagerRegistry;
use Haste\Form\Form;
use Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioSubCategory;
use Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioItem;
use Maniax\ContaoJobs\Helper\MetaFieldsHelper;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @FrontendModule("maniax_contao_portfolio_item_list",
 *   category="maniaxContaoPortfolio",
 *   template="mod_maniax_contao_portfolio_item_list",
 *   renderer="forward"
 * )
 */
class ContaoPortfolioItemListController extends AbstractFrontendModuleController
{
    protected ManagerRegistry $registry;

    protected MetaFieldsHelper $metaFieldsHelper;

    protected TranslatorInterface $translator;

    public function __construct(
        ManagerRegistry $registry,
        MetaFieldsHelper $metaFieldsHelper,
        TranslatorInterface $translator
    ) {
        $this->registry = $registry;
        $this->metaFieldsHelper = $metaFieldsHelper;
        $this->translator = $translator;
    }

    /**
     * @param Template    $template
     * @param ModuleModel $model
     * @param Request     $request
     *
     * @return Response|null
     */
    protected function getResponse(Template $template, ModuleModel $model, Request $request): ?Response
    {
        $portfolioItemRepository = $this->registry->getRepository(TlManiaxContaoPortfolioItem::class);
        $subCategoryRepository = $this->registry->getRepository(TlManiaxContaoPortfolioSubCategory::class);

        $moduleSubCategories = StringUtil::deserialize($model->maniaxContaoPortfolioSubCategories);
        if (!\is_array($moduleSubCategories)) {
            $moduleSubCategories = [];
        }

        $subCategories = \is_array($request->get('subCategory')) && !$model->maniaxContaoPortfolioNoFilter ? $request->get('subCategory') : $moduleSubCategories;

        if (!empty($moduleSubCategories)) {
            $subCategories = array_filter($subCategories, static fn ($element) => \in_array($element, $moduleSubCategories, true));
            if (empty($subCategories)) {
                $subCategories = $moduleSubCategories;
            }
        }

        $sortBySubCategory = null;
        $sortBy = $request->get('sortBy') ?? $model->maniaxContaoPortfolioSortingDefaultField;
        $order = $request->get('order') ?? $model->maniaxContaoPortfolioSortingDefaultDirection;

        if ($model->maniaxContaoPortfolioShowSorting) {
            System::loadLanguageFile('tl_module');

            $formId = 'maniax_contao_portfolio_sorting_'.$model->id;
            $default = $sortBy.'__'.$order;

            $fields = StringUtil::deserialize($model->maniaxContaoPortfolioSortingFields);
            $options = [];

            foreach ($fields as $field) {
                $options[] = $field.'__ASC';
                $options[] = $field.'__DESC';
            }

            $form = new Form($formId, 'POST', fn ($objHaste) => false);
            $form->addFormField('sort', [
                'inputType' => 'select',
                'default' => $default,
                'options' => $options,
                'reference' => &$GLOBALS['TL_LANG']['tl_module']['maniaxContaoPortfolioSortingFields']['fields'],
            ]);

            $template->sortingForm = $form->generate();
            $template->showSorting = true;
            $template->formId = $formId;

            if ('jobLocation' === $sortBy) {
                $sortBySubCategory = $order;
                $sortBy = null;
                $order = null;
            }
        } else {
            $sortBy = null;
            $order = null;
        }

        $portfolioItems = $portfolioItemRepository->findAllPublishedBySubCategory($subCategory, $sortBy, $order);

        if (null !== $sortBySubCategory) {
            $itemParts = [];
            if (empty($subCategories)) {
                foreach ($subCategoryRepository->findAll() as $subCategory) {
                    $subCategories[] = (string) $subCategory->getId();
                }
            }
            $subCategoryArr = 'DESC' === $sortBySubCategory ? array_reverse($subCategories) : $subCategories;
            foreach ($subCategoryArr as $subCategory) {
                $joinedsubCategories = explode('|', $subCategory);
                foreach ($joinedsubCategories as $joinedsubCategory) {
                    $itemParts[(string) $joinedsubCategory] = [];
                }
            }
        }

        $items = [];

        foreach ($portfolioItems as $portfolioItem) {
            $itemTemplate = new FrontendTemplate('maniax_contao_portfolio_item_default');
            $itemTemplate->portfolioItem = $portfolioItem;
            $itemTemplate->portfolioItemMeta = $this->metaFieldsHelper->getMetaFields($portfolioItem);
            $itemTemplate->headlineUnit = $model->maniaxContaoPortfolioHeadlineTag;

            if (null !== $sortBySubCategory) {
                $subCategories = StringUtil::deserialize($portfolioItem->getSubCategory());

                foreach ($subCategoryArr as $subCategory) {
                    $joinedSubCategories = explode('|', $subCategory);
                    foreach ($joinedSubCategories as $joinedSubCategory) {
                        if (\in_array((string) $joinedSubCategory, $subCategories, true)) {
                            $itemParts[$subCategory][] = $itemTemplate->parse();
                            break 2;
                        }
                    }
                }
            } else {
                $items[] = $itemTemplate->parse();
            }
        }

        if (null !== $sortBySubCategory) {
            foreach ($itemParts as $part) {
                $items = array_merge($items, $part);
            }
        }

        $template->attributes = 'data-id="'.$model->id.'"';

        $template->empty = $this->translator->trans('MSC.MANIAX_CONTAO_PORTFOLIO.emptyList', [], 'contao_default');

        $template->items = $items;

        return $template->getResponse();
    }
}
