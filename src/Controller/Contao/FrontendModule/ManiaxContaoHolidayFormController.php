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
use Haste\Form\Form;
use Contao\Template;
use Doctrine\Persistence\ManagerRegistry;
use Maniax\ContaoHoliday\Entity\TlManiaxContaoHolidayItem;
use Maniax\ContaoHoliday\Entity\TlManiaxContaoHolidayDoc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @FrontendModule("maniax_contao_holiday_form", category="maniaxContaoHoliday", template="mod_maniax_contao_holiday_form", renderer="forward")
 */
class ManiaxContaoHolidayFormController extends AbstractFrontendModuleController
{
    protected ManagerRegistry $registry;

    public function __construct(
        ManagerRegistry $registry
    ) {
        $this->registry = $registry;
    }

    protected function getResponse(Template $template, ModuleModel $model, Request $request): Response
    {
        $objForm = new Form('holidayform-' . $model->id, function($objHaste) {
            return \Input::post('FORM_SUBMIT') === $objHaste->getFormId();
        });
        $objForm->addFieldsFromDca('tl_maniax_contao_hiliday_item', array($objForm, 'skipFieldsWithoutInputType'));

        // validate() also checks whether the form has been submitted
        if ($objForm->validate()) {
            // Get all the submitted and parsed data (only works with POST):
            $arrData = $objForm->fetchAll();
        }

        // Get the form as string
        echo $objForm->generate();

        // Generate the form as a string
        $template->form = $objForm->generate();

        return $template->getResponse();
    }
}
