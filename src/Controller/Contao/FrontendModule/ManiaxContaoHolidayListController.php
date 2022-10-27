<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Holiday Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoHoliday\Controller\Contao\FrontendModule;

use Contao\Config;
use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\ServiceAnnotation\FrontendModule;
use Contao\FrontendTemplate;
use Contao\ModuleModel;
use Contao\StringUtil;
use Contao\System;
use Contao\Template;
use Doctrine\Persistence\ManagerRegistry;
use Haste\Form\Form;
use Maniax\ContaoHoliday\Entity\TlManiaxContaoHolidayItem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;

/**
 * @FrontendModule("maniax_contao_holiday_list", category="maniaxContaoHoliday", template="mod_maniax_contao_holiday_list", renderer="forward")
 */
class ManiaxContaoHolidayController extends AbstractFrontendModuleController
{
   /* protected ManagerRegistry $registry;
    protected RouterInterface $router;

    public function __construct(
        ManagerRegistry $registry,
        RouterInterface $router
    ) {
        $this->registry = $registry;
        $this->router = $router;
    }
    */

    protected function getResponse(Template $template, ModuleModel $model, Request $request): Response
    {
        /*
        $holidayItemRepository = $this->registry->getRepository(TlManiaxContaoHolidayItem::class);
        $categoryRepository = $this->registry->getRepository(TlManiaxContaoHolidayCategory::class);

        $moduleCategories = $model->maniaxContaoHolidayCategories;
        if (!\is_array($moduleCategories)) {
            $moduleCategories = [];
        }

        $categories = \is_array($request->get('category')) && !$model->maniaxContaoHolidayNoFilter ? $request->get('category') : $moduleCategories;

        if (!empty($moduleCategories)) {
            $categories = array_filter($categories, static fn ($element) => \in_array($element, $moduleCategories, true));
            if (empty($categories)) {
                $categories = $moduleCategories;
            }
        }

        $sortByCategory = null;
        $sortBy = $request->get('sortBy') ?? $model->maniaxContaoHolidaySortingDefaultField;

        if ($model->maniaxContaoHolidayShowSorting) {
            System::loadLanguageFile('tl_module');

            $formId = 'maniax_contao_holiday_sorting_'.$model->id;
            $default = $sortBy;

            $fields = StringUtil::deserialize($model->maniaxContaoHolidaySortingFields);
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
                'reference' => &$GLOBALS['TL_LANG']['tl_module']['maniaxContaoHolidaySortingFields']['fields'],
            ]);

            $template->sortingForm = $form->generate();
            $template->showSorting = true;
            $template->formId = $formId;

            if ('category' === $sortBy) {
                $sortBy = null;
                $order = null;
            }
        } else {
            $sortBy = null;
            $order = null;
        }

        $holidayItems = $holidayItemRepository->findAllPublishedByCategory($categories, $sortBy, $order);

        if (null !== $sortByCategory) {
            $itemParts = [];
            if (empty($categories)) {
                foreach ($categoryRepository->findAll() as $category) {
                    $categories[] = (string) $category->getId();
                }
            }
            $categoryArr = 'DESC' === $sortByCategory ? array_reverse($categories) : $categories;
            foreach ($categoryArr as $category) {
                $joinedCategories = explode('|', $category);
                foreach ($joinedCategories as $joinedCategory) {
                    $itemParts[(string) $joinedCategory] = [];
                }
            }
        }

        $items = [];

        foreach ($holidayItems as $holidayItem) {
            $itemTemplate = new FrontendTemplate('maniax_contao_holiday_item_default');
            $itemTemplate->holidayItem = $holidayItem;
            $itemTemplate->headlineUnit = $model->maniaxContaoHolidayHeadlineTag;

            if (null !== $sortByCategory) {
                $itemParts[$category][] = $itemTemplate->parse();
            } else {
                $items[] = $itemTemplate->parse();
            }
        }

        if (null !== $sortByCategory) {
            foreach ($itemParts as $part) {
                $items = array_merge($items, $part);
            }
        }

        $template->attributes = 'data-id="'.$model->id.'"';

        $template->empty = $this->translator->trans('MSC.MANIAX_CONTAO_HOLIDAY.emptyList', [], 'contao_default');

        $template->items = $items;

*/
        $template->message = "hi";
        return $template->getResponse();
    }
}
