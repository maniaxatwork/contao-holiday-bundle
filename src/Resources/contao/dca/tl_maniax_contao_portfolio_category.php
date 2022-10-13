<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

$GLOBALS['TL_DCA']['tl_maniax_contao_portfolio_category'] = [
    // Config
    'config' => [
        'dataContainer' => 'Table',
        'ctable' => ['tl_maniax_contao_portfolio_subcategory'],
        'switchToEdit' => true,
        'enableVersioning' => true,
    ],

    'list' => [
        'sorting' => [
            'mode' => 2,
            'fields' => ['title'],
            'flag' => 1,
            'disableGrouping' => true,
        ],
        'label' => [
            'fields' => ['title'],
            'format' => '%s',
        ],
        'global_operations' => [
            'back' => [
                'route' => 'Maniax\ContaoPortfolio\Controller\Contao\BackendModule\SettingsController',
                'label' => &$GLOBALS['TL_LANG']['MSC']['backBT'],
                'icon' => 'back.svg',
            ],
            'all' => [
                'href' => 'act=select',
                'class' => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"',
            ],
        ],
        'operations' => [
            'edit' => [
                'href' => 'table=tl_maniax_contao_portfolio_subcategory',
                'icon' => 'edit.svg',
            ],
            'editheader' => [
                'href' => 'act=edit',
                'icon' => 'header.svg',
            ],
        ],
    ],

    // Palettes
    'palettes' => [
        'default' => '{category_legend},title',
    ],

    // Fields
    'fields' => [
        'id' => [
        ],
        'tstamp' => [
        ],
        'title' => [
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_portfolio_category']['title'],
            'exclude' => true,
            'inputType' => 'text',
            'default' => '',
            'eval' => [
                'maxlength' => 255,
                'tl_class' => 'w50',
                'mandatory' => true,
            ],
        ],
    ],
];
