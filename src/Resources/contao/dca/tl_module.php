<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

use Maniax\ContaoPortfolio\EventListener\Contao\DCA\PortfolioItemFields;
use Maniax\ContaoPortfolio\EventListener\Contao\DCA\TlModule;

$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'maniaxContaoPortfolioShowCategories';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'maniaxContaoPortfolioShowSubCategories';


$GLOBALS['TL_DCA']['tl_module']['palettes']['maniax_contao_portfolio_item_list'] =
    '{title_legend},title,category;
    {config_legend},maniaxContaoPortfolioHeadlineTag,maniaxContaoPortfolioShowCategories,maniaxContaoPortfolioShowSubCategories;
    {template_legend:hide},customTpl;
    {expert_legend:hide},cssID'
;

$GLOBALS['TL_DCA']['tl_module']['subpalettes']['maniaxContaoPortfolioShowCategories'] = 'maniaxContaoPortfolioCategoriesHeadline,maniaxContaoPortfolioShowAllCategories';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['maniaxContaoPortfolioShowSubCategories'] = 'maniaxContaoPortfolioSubCategoriesHeadline,maniaxContaoPortfolioSubCategories,maniaxContaoPortfolioShowAllSubCategories';

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoPortfolioHeadlineTag'] = [
    'exclude' => true,
    'search' => true,
    'inputType' => 'select',
    'options' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'div'],
    'eval' => ['maxlength' => 8, 'tl_class' => 'w50 clr'],
    'sql' => "varchar(8) NOT NULL default 'h2'",
];


$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoPortfolioShowCategories'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['submitOnChange' => true, 'tl_class' => 'clr'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoPortfolioCategoriesHeadline'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['allowHtml' => true, 'tl_class' => 'w50'],
    'sql' => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoPortfolioShowAllCategories'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'clr w50'],
    'sql' => "char(1) NOT NULL default ''",
];


$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoPortfolioShowSubCategories'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['submitOnChange' => true, 'tl_class' => 'clr'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoPortfolioSubCategoriesHeadline'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['allowHtml' => true, 'tl_class' => 'w50 clr'],
    'sql' => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoPortfolioShowAllSubCategories'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'clr w50'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxContaoPortfolioCategories'] = [
    'exclude' => true,
    'inputType' => 'checkboxWizard',
    'options_callback' => [TlModule::class, 'portfolioCategoriesOptionsCallback'],
    'eval' => ['multiple' => true, 'tl_class' => 'clr'],
    'sql' => 'mediumtext null',
];
