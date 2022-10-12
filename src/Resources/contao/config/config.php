<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

use Composer\InstalledVersions;

array_insert($GLOBALS['BE_MOD'], 1, [
    'maniax_contao_portfolio' => [
        'maniax_contao_portfolio_item' => [
            'tables' => ['tl_maniax_contao_portfolio_item', 'tl_content'],
        ],
        'maniax_contao_portfolio_settings_type' => [
            'tables' => ['tl_maniax_contao_portfolio_settings'],
            'hideInNavigation' => true,
        ],
    ],
]);

if (defined('TL_MODE') && TL_MODE == 'BE') {
    $GLOBALS['TL_CSS'][] = 'bundles/maniaxcontaoportfolio/portfolio.min.css|static';
}

$GLOBALS['TL_MODELS'][Maniax\ContaoPortfolio\Contao\Model\ManiaxContaoPortfolioItemModel::getTable()] = Maniax\ContaoPortfolio\Contao\Model\ManiaxContaoPortfolioItemModel::class;
