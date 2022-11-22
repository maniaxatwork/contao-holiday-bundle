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
use Maniax\ContaoHoliday\EventListener\Contao\DCA\TlManiaxContaoHolidayItem;
use Maniax\ContaoHoliday\Entity\TlManiaxContaoHolidayDoc;
use Maniax\ContaoHoliday\Contao\Model\ManiaxContaoHolidayItemModel;
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

            if ($strField == 'cssClass'){
                return false;
            }

            // Changing MCW-fields for frontend
            if ($arrDca['inputType'] == 'multiColumnWizard'){
                $arrDca['inputType'] = 'select';
                $arrDca['label'] = &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['doc'];
                $arrDca['options_callback'] = [TlManiaxContaoHolidayItem::class,'onDocOptionsCallback' ];
                $arrDca['eval'] = ['mandatory' => true];
            }

            // you must return true otherwise the field will be skipped
            return true;
        });

        // Vertretung 1
        $objForm->addFormField('vertretung1Start', array(
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungDoc1'],
            'inputType' => 'fieldsetStart',
            'eval' => array('class' => 'allow-duplication duplicate-fieldset-1 duplicate-fieldset-maxRows-3')
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::BEFORE, 'vertretungDoc1'));

        $objForm->addFormField('vertretung1Stop', array(
            'inputType' => 'fieldsetStop',
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::AFTER, 'vertretungDoc1'));

        $objForm->addFormField('vertretungDoc1VertretungStart', array(
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungStart'],
            'inputType' => 'text',
            'eval' => array('rgxp' => 'date','datepicker' => true,'mandatory' => true),
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::BEFORE, 'vertretung1Stop'));

        $objForm->addFormField('vertretungDoc1VertretungStop', array(
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungStop'],
            'inputType' => 'text',
            'eval' => array('rgxp' => 'date','datepicker' => true,'mandatory' => true),
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::BEFORE, 'vertretung1Stop'));

        // Vertretung 2
        $objForm->addFormField('vertretung2Start', array(
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungDoc2'],
            'inputType' => 'fieldsetStart',
            'eval' => array('class' => 'allow-duplication widget widget-fieldset')
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::BEFORE, 'vertretungDoc2'));

        $objForm->addFormField('vertretung2Stop', array(
            'inputType' => 'fieldsetStop',
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::AFTER, 'vertretungDoc2'));

        $objForm->addFormField('vertretungDoc2VertretungStart', array(
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungStart'],
            'inputType' => 'text',
            'eval' => array('rgxp' => 'date','datepicker' => true,'mandatory' => true),
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::BEFORE, 'vertretung2Stop'));

        $objForm->addFormField('vertretungDoc2VertretungStop', array(
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungStop'],
            'inputType' => 'text',
            'eval' => array('rgxp' => 'date','datepicker' => true,'mandatory' => true),
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::BEFORE, 'vertretung2Stop'));

        // Vertretung 3
        $objForm->addFormField('vertretung3Start', array(
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungDoc3'],
            'inputType' => 'fieldsetStart',
            'eval' => array('class' => 'allow-duplication widget widget-fieldset')
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::BEFORE, 'vertretungDoc3'));

        $objForm->addFormField('vertretung3Stop', array(
            'inputType' => 'fieldsetStop',
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::AFTER, 'vertretungDoc3'));

        $objForm->addFormField('vertretungDoc3VertretungStart', array(
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungStart'],
            'inputType' => 'text',
            'eval' => array('rgxp' => 'date','datepicker' => true,'mandatory' => true),
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::BEFORE, 'vertretung3Stop'));

        $objForm->addFormField('vertretungDoc3VertretungStop', array(
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungStop'],
            'inputType' => 'text',
            'eval' => array('rgxp' => 'date','datepicker' => true,'mandatory' => true),
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::BEFORE, 'vertretung3Stop'));

        // Vertretung 2
        $objForm->addFormField('vertretung4Start', array(
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungDoc4'],
            'inputType' => 'fieldsetStart',
            'eval' => array('class' => 'allow-duplication widget widget-fieldset')
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::BEFORE, 'vertretungDoc4'));

        $objForm->addFormField('vertretung4Stop', array(
            'inputType' => 'fieldsetStop',
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::AFTER, 'vertretungDoc4'));

        $objForm->addFormField('vertretungDoc4VertretungStart', array(
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungStart'],
            'inputType' => 'text',
            'eval' => array('rgxp' => 'date','datepicker' => true,'mandatory' => true),
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::BEFORE, 'vertretung4Stop'));

        $objForm->addFormField('vertretungDoc4VertretungStop', array(
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungStop'],
            'inputType' => 'text',
            'eval' => array('rgxp' => 'date','datepicker' => true,'mandatory' => true),
        ), new \Haste\Util\ArrayPosition(\Haste\Util\ArrayPosition::BEFORE, 'vertretung4Stop'));

        $objForm->addSubmitFormField('submit', 'Angaben eintragen');

        // validate() also checks whether the form has been submitted
        if ($objForm->validate()) {

            // Get all the submitted and parsed data (only works with POST):
            $arrData = $objForm->fetchAll();

            $template->resultOld = $arrData;

            $objModel = new ManiaxContaoHolidayItemModel;

            $date = explode(".",$arrData['holidayStart']);
            $tmstp = strtotime($date[2]."-".$date[1]."-".$date[0]);
            $objModel->holidayStart = $tmstp;
            $date = explode(".",$arrData['holidayStart']);
            $tmstp = strtotime($date[2]."-".$date[1]."-".$date[0]);
            $objModel->holidayStop = $tmstp;
            $date = explode(".",$arrData['showBefore']);
            $tmstp = strtotime($date[2]."-".$date[1]."-".$date[0]);
            $objModel->showBefore = $tmstp;
            $objModel->extend = $arrData['extend'];
            $objModel->extendText = $arrData['extendText'];

            if ($arrData['footerline'] == "")
                $objModel->footerline = 0;
            else
                $objModel->footerline = 1;

            $objModel->footerlineText = $arrData['footerlineText'];

            if ($arrData['published'] == "")
                $objModel->published = 0;
            else
                $objModel->published = 1;

            $objModel->tstamp = time();

            // Vertretungsdoc 1
            $date1 = explode(".",$arrData['vertretungDoc1VertretungStart']);
            $tmstp1 = strtotime($date1[2]."-".$date1[1]."-".$date1[0]);
            $date2 = explode(".",$arrData['vertretungDoc1VertretungStop']);
            $tmstp2 = strtotime($date2[2]."-".$date2[1]."-".$date2[0]);
            $doc = [
                "doc" => $arrData['vertretungDoc1'],
                "vertretungStart" => $tmstp1,
                "vertretungStop" => $tmstp2,
            ];

            $tmp[] = $doc;
            $objModel->vertretungDoc1 = serialize($tmp);

            // Vertretungsdoc 2
            $tmp = [];
            $date1 = explode(".",$arrData['vertretungDoc2VertretungStart']);
            $tmstp1 = strtotime($date1[2]."-".$date1[1]."-".$date1[0]);
            $date2 = explode(".",$arrData['vertretungDoc2VertretungStop']);
            $tmstp2 = strtotime($date2[2]."-".$date2[1]."-".$date2[0]);
            $doc = [
                "doc" => $arrData['vertretungDoc2'],
                "vertretungStart" => $tmstp1,
                "vertretungStop" => $tmstp2,
            ];
            $tmp[] = $doc;
            $objModel->vertretungDoc2 = serialize($tmp);

            // Vertretungsdoc 3
            $tmp = [];
            $date1 = explode(".",$arrData['vertretungDoc3VertretungStart']);
            $tmstp1 = strtotime($date1[2]."-".$date1[1]."-".$date1[0]);
            $date2 = explode(".",$arrData['vertretungDoc3VertretungStop']);
            $tmstp2 = strtotime($date2[2]."-".$date2[1]."-".$date2[0]);
            $doc = [
                "doc" => $arrData['vertretungDoc3'],
                "vertretungStart" => $tmstp1,
                "vertretungStop" => $tmstp2,
            ];
            $tmp[] = $doc;
            $objModel->vertretungDoc3 = serialize($tmp);

            // Vertretungsdoc 4
            $tmp = [];
            $date1 = explode(".",$arrData['vertretungDoc4VertretungStart']);
            $tmstp1 = strtotime($date1[2]."-".$date1[1]."-".$date1[0]);
            $date2 = explode(".",$arrData['vertretungDoc4VertretungStop']);
            $tmstp2 = strtotime($date2[2]."-".$date2[1]."-".$date2[0]);
            $doc = [
                "doc" => $arrData['vertretungDoc4'],
                "vertretungStart" => $tmstp1,
                "vertretungStop" => $tmstp2,
            ];
            $tmp[] = $doc;
            $objModel->vertretungDoc4 = serialize($tmp);

            $objModel->save();

            $template->result = $objModel;
        }

        // Get the form as string
        //echo $objForm->generate();

        // Generate the form as a string
        $template->form = $objForm->generate();

        return $template->getResponse();
    }
}
