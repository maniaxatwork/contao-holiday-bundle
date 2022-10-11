<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_user_group']['fields']['maniax_contao_portfolio_settings'] = [
    'inputType' => 'checkbox',
    'exclude' => true,
    'options' => [
        'settings',
    ],
    'reference' => &$GLOBALS['TL_LANG']['tl_user_group']['maniax_contao_portfolio_settings'],
    'eval' => [
        'multiple' => true,
    ],
    'sql' => 'blob NULL',
];

PaletteManipulator::create()
    ->addField('maniax_contao_portfolio_settings', 'modules', PaletteManipulator::POSITION_AFTER)
    ->applyToPalette('default', 'tl_user_group')
;