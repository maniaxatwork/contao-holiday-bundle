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
use Maniax\ContaoHoliday\Entity\TlManiaxContaoHolidayLocation;
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
        $locRepository = $this->registry->getRepository(TlManiaxContaoHolidayLocation::class);

        $holidayItems = $holidayItemRepository->findAllByPublishedAndViewable();

        foreach ($holidayItems as $key => $row) {
            $show[$key] = $row->getShowBefore();
        }
        array_multisort($show, SORT_ASC, $holidayItems);

        // Fill the template with data
        $items = [];
        $firstId = 0;
        if (!empty($holidayItems)){
            $itemTemplate = new FrontendTemplate('maniax_contao_holiday_list_default');

            $locations = array();
            $hinweis = "";
            $footerline ="";

            foreach ($holidayItems as $holidayItem){

                if ($holidayItem->getExtend() == "hinweis"){
                    $hinweis = $holidayItem->getExtendText();

                    if ($holidayItem->isFooterline()){
                        $footerline = $holidayItem->getFooterlineText();
                    }

                }else{
                    $location = $locRepository->findPublishedById($holidayItem->getLocation());
                    if ($firstId == 0)
                        $firstId = $holidayItem->getId();

                    if(array_search($location->getStreet(), array_column($locations, 'location')) !== FALSE)
                        continue;

                    $docs1 = $holidayItem->getVertretungDoc1();
                    $doc1 = "";
                    foreach($docs1 as $doc){
                        if ($doc['doc'] == "") continue;

                        $tmp = $docRepository->findPublishedById($doc['doc']);
                        $doc1 .= "<div class='vertretung'>".$tmp->getName()."<br \>".$tmp->getStreet()."<br \>".$tmp->getLocality()."<br \>".$tmp->getTelephone()."<br \>Vom ".date('d.m.Y', $doc['vertretungStart'])." - ".date('d.m.Y', $doc['vertretungStop'])."</div>";
                    }

                    $docs2 = $holidayItem->getVertretungDoc2();
                    $doc2 = "";
                    foreach($docs2 as $doc){
                        if ($doc['doc'] == "") continue;

                        $tmp = $docRepository->findPublishedById($doc['doc']);
                        $doc2 .= "<div class='vertretung'>".$tmp->getName()."<br \>".$tmp->getStreet()."<br \>".$tmp->getLocality()."<br \>".$tmp->getTelephone()."<br \>Vom ".date('d.m.Y', $doc['vertretungStart'])." - ".date('d.m.Y', $doc['vertretungStop'])."</div>";
                    }


                    if ($holidayItem->isFooterline()){
                        $footerline = $holidayItem->getFooterlineText();
                    }

                    $locations[] = [
                        'raw' => $holidayItem,
                        'location' => $location->getStreet(),
                        'doc1' => $doc1,
                        'doc2' => $doc2,
                        'holidayStart' => date('d.m.Y', (int) $holidayItem->getHolidayStart()),
                        'holidayStop' => date('d.m.Y', (int) $holidayItem->getHolidayStop()),
                        'footerline' => $footerline
                    ];

                    $footerline ="";
                }
            }

            $itemTemplate->locations = $locations;
            $itemTemplate->hinweis = $hinweis;
            $itemTemplate->footerline = $footerline;
            $template->holidayItems = $holidayItems;
            $items[] = $itemTemplate->parse();

            $template->firstId = $firstId;

            $template->items = $items;
        }else{
            $template->empty = true;
        }


        return $template->getResponse();
    }
}
