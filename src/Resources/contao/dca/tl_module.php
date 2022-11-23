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
    '{title_legend},name,type;
    {expert_legend:hide},cssID'
;
$GLOBALS['TL_DCA']['tl_module']['palettes']['maniax_contao_holiday_form'] =
    '{title_legend},name,type,maniaxPassword;
    {expert_legend:hide},cssID'
;

$GLOBALS['TL_DCA']['tl_module']['fields']['maniaxPassword'] = [
    'exclude' => true,
    'inputType' => 'password',
    'eval' => ['tl_class' => 'clr w50'],
    'save_callback' => [[
        TlModule::class,
        'savePass',
    ]],
    'sql' => 'mediumtext null',
];

