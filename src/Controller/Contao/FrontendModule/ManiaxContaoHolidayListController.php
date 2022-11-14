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

        $holidayItems = $holidayItemRepository->findAllByPublished();

        if (null === $holidayItems) {
            return null;
        }

        // Fill the template with data from the parent record
        $items = [];

        foreach($holidayItems as $holidayItem){
            $itemTemplate = new FrontendTemplate('maniax_contao_holiday_item_default');
            $template->holidayItem = $holidayItem;

            $items[] = $itemTemplate->parse();
        }

        $template->items = $items;

        return $template->getResponse();
    }
}
