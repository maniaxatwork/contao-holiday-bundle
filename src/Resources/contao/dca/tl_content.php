<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs  Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['maniax_contao_jobs_job_offer_details'] = '{type_legend},type,maniax_contao_jobs_job_offer_details;{image_legend},size;{expert_legend},guests,cssID;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['fields']['maniax_contao_jobs_job_offer_details'] = [
    'exclude' => true,
    'inputType' => 'checkboxWizard',
    'options' => [
        'employmentTypeFormatted' => 'Stellenarten',
        'description' => 'Beschreibung',
        'publicationDateFormatted' => 'Veröffentlichungsdatum',
        'title' => 'Titel',
        'addressLocalityFormatted' => 'Arbeitsort',
        'image' => 'Bild',
    ],
    'eval' => ['multiple' => true, 'tl_class' => 'clr'],
    'sql' => 'blob NULL',
];
