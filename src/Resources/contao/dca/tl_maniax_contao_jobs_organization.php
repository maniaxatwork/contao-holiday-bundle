<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs  Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

$GLOBALS['TL_DCA']['tl_maniax_contao_jobs_organization'] = [
    // Config
    'config' => [
        'dataContainer' => 'Table',
        'ctable' => ['tl_maniax_contao_jobs_job_location'],
        'switchToEdit' => true,
        'enableVersioning' => true,
    ],

    'list' => [
        'sorting' => [
            'mode' => 2,
            'fields' => ['name'],
            'flag' => 1,
            'disableGrouping' => true,
        ],
        'label' => [
            'fields' => ['name'],
            'format' => '%s',
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
                'href' => 'table=tl_maniax_contao_jobs_job_location',
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
        'default' => '{organization_legend},name,sameAs;{logo_legend},logo',
    ],

    // Fields
    'fields' => [
        'id' => [
        ],
        'tstamp' => [
        ],
        'name' => [
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_jobs_organization']['name'],
            'exclude' => true,
            'inputType' => 'text',
            'default' => '',
            'eval' => [
                'maxlength' => 255,
                'tl_class' => 'w50',
                'mandatory' => true,
            ],
        ],
        'sameAs' => [
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_jobs_organization']['sameAs'],
            'exclude' => true,
            'inputType' => 'text',
            'default' => '',
            'eval' => [
                'maxlength' => 255,
                'tl_class' => 'w50',
                'rgxp' => 'url',
            ],
        ],
        'logo' => [
            'exclude' => true,
            'inputType' => 'fileTree',
            'eval' => [
                'fieldType' => 'radio',
                'filesOnly' => true,
                'extensions' => Contao\Config::get('validImageTypes'),
            ],
        ],
    ],
];
