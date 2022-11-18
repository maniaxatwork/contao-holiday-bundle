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
        $form = new Form('my-form-' . $model->id, 'POST');

        $form->addFieldsFromDca('tl_maniax_contao_hiliday_item', static function(string &$fieldName, array &$fieldConfig) {
            // make sure to skip elements without inputType, or you will get an exception
            if (!isset($fieldConfig['inputType'])) {
                return false;
            }

            // Return true to include the field, or false to skip the field
            return true;
        });

        $form->addCaptchaFormField();
        $form->addSubmitFormField('Urlaub speichern!');

        if ($form->validate()) {
            // Get all the submitted and parsed data (only works with POST):
            $formData = $form->fetchAll();
        }

        // Generate the form as a string
        $template->form = $form->generate();

        return $template->getResponse();
    }
}
