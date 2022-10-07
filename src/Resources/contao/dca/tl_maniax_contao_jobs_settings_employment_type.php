<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs  Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

use Maniax\ContaoJobs\EventListener\Contao\DCA\TlManiaxContaoJobsSettingsEmploymentType;

$GLOBALS['TL_DCA']['tl_maniax_contao_jobs_settings_employment_type'] = [
    'config' => [
        'dataContainer' => 'Table',
        'switchToEdit' => true,
        'markAsCopy' => 'title',
        'enableVersioning' => true,
    ],

    'list' => [
        'sorting' => [
            'mode' => 1,
            'fields' => ['title'],
            'flag' => 1,
            'panelLayout' => 'filter;search,sort,limit',
        ],
        'label' => [
            'fields' => ['title'],
            'showColumns' => false,
        ],
        'global_operations' => [
            'back' => [
                'route' => 'Maniax\ContaoJobs\Controller\Contao\BackendModule\SettingsController',
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
            'copy' => [
                'href' => 'act=copy',
                'icon' => 'copy.svg',
            ],
            'delete' => [
                'href' => 'act=delete',
                'icon' => 'delete.svg',
                'attributes' => 'onclick="if(!confirm(\''.($GLOBALS['TL_LANG']['MSC']['deleteConfirm'] ?? null).'\'))return false;Backend.getScrollOffset()"',
            ],
        ],
    ],

    // Palettes
    'palettes' => [
        'default' => '{settings_legend},title,google_for_jobs_mapping;',
    ],

    // Fields
    'fields' => [
        'id' => [
        ],
        'tstamp' => [
        ],
        'title' => [
            'exclude' => true,
            'search' => true,
            'inputType' => 'text',
            'eval' => [
                'maxlength' => 255,
                'tl_class' => 'w50',
                'mandatory' => true,
            ],
        ],
        'google_for_jobs_mapping' => [
            'exclude' => true,
            'inputType' => 'select',
            'options_callback' => [
                TlManiaxContaoJobsSettingsEmploymentType::class,
                'googleForJobsMappingOptionsCallback',
            ],
            'eval' => [
                'tl_class' => 'w50',
                'mandatory' => true,
            ],
        ],
    ],
];
