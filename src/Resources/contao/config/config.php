<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Holiday Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

use Composer\InstalledVersions;

array_insert($GLOBALS['BE_MOD'], 1, [
    'maniax_contao_holiday' => [
        'maniax_contao_holiday_items' => [
            'tables' => ['tl_maniax_contao_holiday', 'tl_content'],
        ],
        'maniax_contao_holiday_docs' => [
            'tables' => ['tl_maniax_contao_holiday_doc'],
            'hideInNavigation' => true,
        ],
    ],
]);

if (defined('TL_MODE') && TL_MODE == 'BE') {
    $GLOBALS['TL_CSS'][] = 'bundles/maniaxcontaoholiday/holiday.min.css|static';
}

/*
 * Models
 */
$GLOBALS['TL_MODELS'][Maniax\ContaoHoliday\Contao\Model\ManiaxContaoHolidayItemModel::getTable()] = Maniax\ContaoHoliday\Contao\Model\ManiaxContaoHolidayItemModel::class;
