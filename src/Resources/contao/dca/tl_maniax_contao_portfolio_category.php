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
        'switchToEdit' => true,
        'enableVersioning' => true,
    ],

    'list' => [
        'sorting' => [
            'mode' => 5,
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
                'href' => 'act=edit',
                'icon' => 'edit.svg',
            ],
            'toggle' => [
                'attributes' => 'onclick="Backend.getScrollOffset();"',
                'haste_ajax_operation' => [
                    'field' => 'published',
                    'options' => [
                        [
                            'value' => 0,
                            'icon' => 'invisible.svg',
                        ],
                        [
                            'value' => 1,
                            'icon' => 'visible.svg',
                        ],
                    ],
                ],
            ],
        ],
    ],

    // Palettes
    'palettes' => [
        'default' => '{category_legend},title;{publish_legend},published',
    ],

    // Fields
    'fields' => [
        'id' => [
        ],
        'pid' => [
            'sql' => ['type' => 'integer', 'unsigned' => true, 'default' => 0],
        ],
        'sorting' => [
            'sql' => ['type' => 'integer', 'unsigned' => true, 'default' => 0],
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
        'published' => [
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_portfolio_category']['published'],
            'exclude' => true,
            'filter' => true,
            'inputType' => 'checkbox',
        ],
    ],
];
