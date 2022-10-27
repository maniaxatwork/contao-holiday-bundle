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
use Maniax\ContaoHoliday\Entity\TlManiaxContaoHolidayDoc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;

/**
 * @FrontendModule("maniax_contao_holiday_list", doc="maniaxContaoHoliday", template="mod_maniax_contao_holiday_list", renderer="forward")
 */
class ManiaxContaoHolidayListController extends AbstractFrontendModuleController
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
        $docRepository = $this->registry->getRepository(TlManiaxContaoHolidayDoc::class);

        $moduleDocs = $model->maniaxContaoHolidayDocs;
        if (!\is_array($moduleDocs)) {
            $moduleDocs = [];
        }

        $docs = \is_array($request->get('doc')) && !$model->maniaxContaoHolidayNoFilter ? $request->get('doc') : $moduleDocs;

        if (!empty($moduleDocs)) {
            $docs = array_filter($docs, static fn ($element) => \in_array($element, $moduleDocs, true));
            if (empty($docs)) {
                $docs = $moduleDocs;
            }
        }

        $sortByDoc = null;
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

            if ('doc' === $sortBy) {
                $sortBy = null;
                $order = null;
            }
        } else {
            $sortBy = null;
            $order = null;
        }

        $holidayItems = $holidayItemRepository->findAllPublishedByDoc($docs, $sortBy, $order);

        if (null !== $sortByDoc) {
            $itemParts = [];
            if (empty($docs)) {
                foreach ($docRepository->findAll() as $doc) {
                    $docs[] = (string) $doc->getId();
                }
            }
            $docArr = 'DESC' === $sortByDoc ? array_reverse($docs) : $docs;
            foreach ($docArr as $doc) {
                $joinedDocs = explode('|', $doc);
                foreach ($joinedDocs as $joinedDoc) {
                    $itemParts[(string) $joinedDoc] = [];
                }
            }
        }

        $items = [];

        foreach ($holidayItems as $holidayItem) {
            $itemTemplate = new FrontendTemplate('maniax_contao_holiday_item_default');
            $itemTemplate->holidayItem = $holidayItem;
            $itemTemplate->headlineUnit = $model->maniaxContaoHolidayHeadlineTag;

            if (null !== $sortByDoc) {
                $itemParts[$doc][] = $itemTemplate->parse();
            } else {
                $items[] = $itemTemplate->parse();
            }
        }

        if (null !== $sortByDoc) {
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
