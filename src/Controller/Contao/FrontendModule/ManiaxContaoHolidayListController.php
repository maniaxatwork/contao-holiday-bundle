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
use Contao\System;
use Contao\Template;
use Doctrine\Persistence\ManagerRegistry;
use Maniax\ContaoHoliday\Entity\TlManiaxContaoHolidayItem;
use Maniax\ContaoHoliday\Entity\TlManiaxContaoHolidayDoc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @FrontendModule("maniax_contao_holiday_list", category="maniaxContaoHoliday", template="mod_maniax_contao_holiday_list", renderer="forward")
 */
class ManiaxContaoHolidayListController extends AbstractFrontendModuleController
{
    protected ManagerRegistry $registry;

    public function __construct(
        ManagerRegistry $registry
    ) {
        $this->registry = $registry;
    }

    protected function getResponse(Template $template, ModuleModel $model, Request $request): Response
    {
        $holidayItemRepository = $this->registry->getRepository(TlManiaxContaoHolidayItem::class);
        $docRepository = $this->registry->getRepository(TlManiaxContaoHolidayDoc::class);

        $holidayItems = $holidayItemRepository->findAllByPublishedAndViewable();

        if (null === $holidayItems) {
            return null;
        } else {
            foreach ($holidayItems as $key => $row) {
                $show[$key] = $row->getShowBefore();
            }
            array_multisort($show, SORT_ASC, $holidayItems);
            $holidayItem = $holidayItems[0];
        }

        // Fill the template with data
        $items = [];

        //foreach($holidayItems as $holidayItem){
            $itemTemplate = new FrontendTemplate('maniax_contao_holiday_list_default');

            $docs1 = $holidayItem->getVertretungDoc1();
            $doc1 = "";
            foreach($docs1 as $doc){
                $tmp = $docRepository->findPublishedById($doc['doc']);
                $doc1 .= "<div class='vertretung'>".$tmp->getName()."<br \>".$tmp->getStreet()."<br \>".$tmp->getLocality()."<br \>".$tmp->getTelephone()."<br \>Vom ".date('d.m.Y', $doc['vertretungStart'])." - ".date('d.m.Y', $doc['vertretungStop'])."</div>";
            }

            $docs2 = $holidayItem->getVertretungDoc2();
            $doc2 = "";
            foreach($docs2 as $doc){
                $tmp = $docRepository->findPublishedById($doc['doc']);
                $doc2 .= "<div class='vertretung'>".$tmp->getName()."<br \>".$tmp->getStreet()."<br \>".$tmp->getLocality()."<br \>".$tmp->getTelephone()."<br \>Vom ".date('d.m.Y', $doc['vertretungStart'])." - ".date('d.m.Y', $doc['vertretungStop'])."</div>";
            }

            $docs3 = $holidayItem->getVertretungDoc3();
            $doc3 = "";
            foreach($docs3 as $doc){
                $tmp = $docRepository->findPublishedById($doc['doc']);
                $doc3 .= "<div class='vertretung'>".$tmp->getName()."<br \>".$tmp->getStreet()."<br \>".$tmp->getLocality()."<br \>".$tmp->getTelephone()."<br \>Vom ".date('d.m.Y', $doc['vertretungStart'])." - ".date('d.m.Y', $doc['vertretungStop'])."</div>";
            }

            $docs4 = $holidayItem->getVertretungDoc4();
            $doc4 = "";
            foreach($docs4 as $doc){
                $tmp = $docRepository->findPublishedById($doc['doc']);
                $doc4 .= "<div class='vertretung'>".$tmp->getName()."<br \>".$tmp->getStreet()."<br \>".$tmp->getLocality()."<br \>".$tmp->getTelephone()."<br \>Vom ".date('d.m.Y', $doc['vertretungStart'])." - ".date('d.m.Y', $doc['vertretungStop'])."</div>";
            }

            $template->holidayItem = $holidayItem;
            $itemTemplate->doc1 = $doc1;
            $itemTemplate->doc2 = $doc2;
            $itemTemplate->doc3 = $doc3;
            $itemTemplate->doc4 = $doc4;
            $itemTemplate->holidayStart = date('d.m.Y', (int) $holidayItem->getHolidayStart());
            $itemTemplate->holidayStop = date('d.m.Y', (int) $holidayItem->getHolidayStop());
            $items[] = $itemTemplate->parse();

        //}

        $template->items = $items;

        return $template->getResponse();
    }
}
