<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Holiday Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

use Maniax\ContaoHoliday\EventListener\Contao\DCA\TlModule;

$GLOBALS['TL_DCA']['tl_module']['palettes']['maniax_contao_holiday_list'] =
    '{title_legend},name,type,holidayDoc;
    {expert_legend:hide},cssID'
;

$GLOBALS['TL_DCA']['tl_module']['fields']['holidayDoc'] = [
    'exclude' => true,
    'inputType' => 'select',
    'options_callback' => [TlModule::class, 'onDocOptionsCallback'],
    'eval' => ['tl_class' => 'clr w50'],
    'sql' => 'mediumtext null',
];
