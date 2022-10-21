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

$GLOBALS['TL_DCA']['tl_module']['fields']['portfolioHeadline'] = [
    'exclude' => true,
    'search' => true,
    'inputType' => 'inputUnit',
    'options' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
    'eval' => [
        'maxlength'=>200,
        'tl_class'=>'w50 clr'
    ],
    'sql' => "varchar(255) NOT NULL default 'a:2:{s:5:\"value\";s:0:\"\";s:4:\"unit\";s:2:\"h2\";}'"
];

$GLOBALS['TL_DCA']['tl_module']['fields']['portfolioSortingDefaultField'] = [
    'exclude' => true,
    'inputType' => 'select',
    'options' => PortfolioItemFields::getFields(),
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
    'reference' => &$GLOBALS['TL_LANG']['tl_module']['portfolioSortingDefaultDirection']['fields'],
    'sql' => "varchar(4) NOT NULL default ''",
];
