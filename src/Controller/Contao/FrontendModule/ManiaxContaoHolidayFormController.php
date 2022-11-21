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
        $objForm = new Form('holidayform-' . $model->id, 'POST', function($objHaste) {
            return \Input::post('FORM_SUBMIT') === $objHaste->getFormId();
        });

        //$objForm->addFieldsFromDca('tl_maniax_contao_holiday_item', array($objForm, 'skipFieldsWithoutInputType'));
        $objForm->addFieldsFromDca('tl_maniax_contao_holiday_item', function(&$strField, &$arrDca) {

            // make sure to skip elements without inputType or you will get an exception
            if (!isset($arrDca['inputType'])) {
                return false;
            }

            // Changing MCW-fields for frontend
            if ($arrDca['inputType'] == 'multiColumnWizard'){
                $arrDca['inputType'] = 'select';
                $arrDca['label'] = 'Arztauswahl';
                $arrDca['options_callback'] = [TlManiaxContaoHolidayItem::class,'onDocOptionsCallback' ];
                $arrDca['eval'] = ['mandatory' => true];
            }

            // you must return true otherwise the field will be skipped
            return true;
        });

        $objForm->addFormField('vertretung1Start', array(
            'label' => 'Vertretung 1',
            'inputType' => 'fieldsetStart',
            'eval' => array('class' => 'allow-duplication')
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::BEFORE, 'vertretungDoc1'));

        $objForm->addFormField('vertretung1Stop', array(
            'inputType' => 'fieldsetStop',
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::AFTER, 'vertretungDoc1'));

        $objForm->addFormField('vertretungDoc1VertretungStart', array(
            'label' => 'Vertretungsbeginn',
            'inputType' => 'text',
            'eval' => array('rgxp' => 'date','datepicker' => true,'mandatory' => true),
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::BEFORE, 'vertretung1Stop'));

        $objForm->addFormField('vertretungDoc1VertretungStop', array(
            'label' => 'Vertretungsende',
            'inputType' => 'text',
            'eval' => array('rgxp' => 'date','datepicker' => true,'mandatory' => true),
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::BEFORE, 'vertretung1Stop'));


        // validate() also checks whether the form has been submitted
        if ($objForm->validate()) {
            // Get all the submitted and parsed data (only works with POST):
            $arrData = $objForm->fetchAll();
        }

        // Get the form as string
        //echo $objForm->generate();

        // Generate the form as a string
        $template->form = $objForm->generate();

        return $template->getResponse();
    }
}