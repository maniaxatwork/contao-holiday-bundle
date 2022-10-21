<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

use Maniax\ContaoPortfolio\EventListener\Contao\DCA\PortfolioItemFiles;
use Maniax\ContaoPortfolio\EventListener\Contao\DCA\TlModule;

$GLOBALS['TL_DCA']['tl_module']['palettes']['maniax_contao_portfolio_item_list'] =
    '{title_legend},name,type,portfolioCategory;
    {config_legend},portfolioHeadlineTag,portfolioHeadline,portfolioSortingDefaultField,portfolioSortingDefaultDirection;
    {expert_legend:hide},cssID'
;

$GLOBALS['TL_DCA']['tl_module']['fields']['portfolioCategory'] = [
    'exclude' => true,
    'inputType' => 'select',
    'options_callback' => [TlModule::class, 'onCategoryOptionsCallback'],
    'eval' => ['tl_class' => 'clr w50'],
    'sql' => 'mediumtext null',
];

$GLOBALS['TL_DCA']['tl_module']['fields']['portfolioHeadlineTag'] = [
    'exclude' => true,
    'search' => true,
    'inputType' => 'select',
    'options' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'div'],
    'eval' => ['maxlength' => 8, 'tl_class' => 'w50 clr'],
    'sql' => "varchar(8) NOT NULL default 'h2'",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['portfolioHeadline'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['allowHtml' => true, 'tl_class' => 'w50'],
    'sql' => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['portfolioSortingDefaultField'] = [
    'exclude' => true,
    'inputType' => 'select',
    'options' => PortfolioItemFiles::getFields(),
    'eval' => [
        'tl_class' => 'w50 clr',
    ],
    'reference' => &$GLOBALS['TL_LANG']['tl_module']['portfolioSortingDefaultField']['fields'],
    'sql' => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['portfolioSortingDefaultDirection'] = [
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['ASC', 'DESC'],
    'eval' => [
        'tl_class' => 'w50',
    ],
    'sql' => "varchar(4) NOT NULL default ''",
];
