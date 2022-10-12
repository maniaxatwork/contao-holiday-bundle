<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

use Contao\System;
use Maniax\ContaoPortfolio\EventListener\Contao\DCA\TlManiaxContaoPortfolioSubCategory;

$GLOBALS['TL_DCA']['tl_maniax_contao_portfolio_subcategory'] = [
    // Config
    'config' => [
        'dataContainer' => 'Table',
        'ptable' => 'tl_maniax_contao_portfolio_category',
        'switchToEdit' => true,
        'enableVersioning' => true,
    ],

    'list' => [
        'sorting' => [
            'mode' => 4,
            'flag' => 1,
            'fields' => ['pid'],
            'headerFields' => ['name'],
            'child_record_callback' => [TlManiaxContaoPortfolioSubCategory::class, 'listSubCategories'],
            'child_record_class' => 'no_padding',
            'panelLayout' => 'filter;sort,search,limit',
            'disableGrouping' => true,
        ],
        'label' => [
            'fields' => [
                'title'
            ],
            'format' => '%s',
        ],
        'global_operations' => [
            'all' => [
                'href' => 'act=select',
                'class' => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"',
            ],
        ],
        'operations' => [
            'edit' => [
                'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_portfolio_config']['edit'],
                'href' => 'act=edit',
                'icon' => 'edit.svg',
            ],
            'delete' => [
                'href' => 'act=delete',
                'icon' => 'delete.svg',
                'attributes' => 'onclick="if(!confirm(\''.($GLOBALS['TL_LANG']['MSC']['deleteConfirm'] ?? null).'\'))return false;Backend.getScrollOffset()"',
            ],
            'show' => [
                'href' => 'act=show',
                'icon' => 'show.svg',
            ],
        ],
    ],

    // Palettes
    'palettes' => [
        'default' => '{title_legend},title',
    ],

    // Fields
    'fields' => [
        'id' => [
            'search' => true,
        ],
        'pid' => [
            'foreignKey' => 'tl_maniax_contao_portfolio_category.title',
            'relation' => [
                'type' => 'belongsTo',
                'load' => 'lazy',
            ],
        ],
        'tstamp' => [
            'sorting' => true,
            'flag' => 6,
        ],
        'title' => [
            'exclude' => true,
            'inputType' => 'text',
            'default' => '',
            'eval' => [
                'maxlength' => 255,
                'tl_class' => 'w50',
            ],
        ],
    ],
];
