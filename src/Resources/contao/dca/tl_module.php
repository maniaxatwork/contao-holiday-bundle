<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs  Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

use Maniax\ContaoJobs\EventListener\Contao\DCA\JobOfferFields;
use Maniax\ContaoJobs\EventListener\Contao\DCA\TlModule;

$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'maniaxContaoJobsShowTypes';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'maniaxContaoJobsShowLocations';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'maniaxContaoJobsShowButton';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'maniaxContaoJobsShowSorting';

$GLOBALS['TL_DCA']['tl_module']['palettes']['maniax_contao_jobs_offer_list'] =
    '{title_legend},name,type;
    {config_legend},maniaxContaoJobsHeadlineTag,maniaxContaoJobsSortingDefaultField,maniaxContaoJobsSortingDefaultDirection,maniaxContaoJobsShowSorting,maniaxContaoJobsLocations,maniaxContaoJobsNoFilter;
    {redirect_legend},jumpTo;
    {template_legend:hide},customTpl;
    {expert_legend:hide},cssID'
;

$GLOBALS['TL_DCA']['tl_module']['palettes']['maniax_contao_jobs_offer_reader'] =
    '{title_legend},name,type;
    {config_legend},maniaxContaoJobsHeadlineTag,imgSize,maniaxContaoJobsTemplateParts,maniaxContaoJobsShowLogo;
    {template_legend:hide},customTpl;
    {expert_legend:hide},cssID'
;

$GLOBALS['TL_DCA']['tl_module']['palettes']['maniax_contao_jobs_filter'] =
    '{title_legend},name,type;
    {config_legend},maniaxContaoJobsShowButton,maniaxContaoJobsShowTypes,maniaxContaoJobsShowLocations;
    {template_legend:hide},customTpl;
    {redirect_legend},jumpTo;
    {expert_legend:hide},cssID'
;

$GLOBALS['TL_DCA']['tl_module']['subpalettes']['maniaxContaoJobsShowButton'] = 'maniaxContaoJobsSubmit';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['maniaxContaoJobsShowTypes'] = 'maniaxContaoJobsTypesHeadline,maniaxContaoJobsShowAllTypes,maniaxContaoJobsShowQuantity';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['maniaxContaoJobsShowLocations'] = 'maniaxContaoJobsLocationsHeadline,maniaxContaoJobsLocations,maniaxContaoJobsShowAllLocations,maniaxContaoJobsShowLocationQuantity';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['maniaxContaoJobsShowSorting'] = 'maniaxContaoJobsSortingFields';

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsHeadlineTag'] = [
    'exclude' => true,
    'search' => true,
    'inputType' => 'select',
    'options' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'div'],
    'eval' => ['maxlength' => 8, 'tl_class' => 'w50 clr'],
    'sql' => "varchar(8) NOT NULL default 'h2'",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsShowButton'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['submitOnChange' => true, 'tl_class' => 'clr'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsSubmit'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50 clr'],
    'sql' => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsShowTypes'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['submitOnChange' => true, 'tl_class' => 'clr'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsTypesHeadline'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['allowHtml' => true, 'tl_class' => 'w50'],
    'sql' => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsShowAllTypes'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'clr w50'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsShowQuantity'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsShowLocations'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['submitOnChange' => true, 'tl_class' => 'clr'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsLocationsHeadline'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['allowHtml' => true, 'tl_class' => 'w50 clr'],
    'sql' => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsShowAllLocations'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'clr w50'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsShowLocationQuantity'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsShowSorting'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => [
        'submitOnChange' => true,
        'tl_class' => 'clr',
    ],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsSortingFields'] = [
    'exclude' => true,
    'inputType' => 'checkboxWizard',
    'options' => JobOfferFields::getFields(),
    'eval' => [
        'multiple' => true,
    ],
    'reference' => &$GLOBALS['TL_LANG']['tl_module']['maniaxContaoJobsSortingFields']['fields'],
    'sql' => 'mediumtext NULL',
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsSortingDefaultField'] = [
    'exclude' => true,
    'inputType' => 'select',
    'options' => JobOfferFields::getFields(),
    'eval' => [
        'tl_class' => 'w50 clr',
    ],
    'reference' => &$GLOBALS['TL_LANG']['tl_module']['maniaxContaoJobsSortingFields']['fields'],
    'sql' => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsSortingDefaultDirection'] = [
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['ASC', 'DESC'],
    'eval' => [
        'tl_class' => 'w50',
    ],
    'sql' => "varchar(4) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsTemplateParts'] = [
    'exclude' => true,
    'inputType' => 'checkboxWizard',
    'options' => ['title', 'image', 'elements', 'description', 'employmentType', 'validThrough', 'salary', 'jobLocation', 'backlink'],
    'eval' => ['multiple' => true, 'tl_class' => 'clr'],
    'reference' => &$GLOBALS['TL_LANG']['tl_module']['maniaxContaoJobsReaderTemplate']['parts'],
    'sql' => 'mediumtext null',
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsLocations'] = [
    'exclude' => true,
    'inputType' => 'checkboxWizard',
    'options_callback' => [TlModule::class, 'jobLocationOptionsCallback'],
    'eval' => ['multiple' => true, 'tl_class' => 'clr'],
    'sql' => 'mediumtext null',
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsShowLogo'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoJobsNoFilter'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'sql' => "char(1) NOT NULL default ''",
];
