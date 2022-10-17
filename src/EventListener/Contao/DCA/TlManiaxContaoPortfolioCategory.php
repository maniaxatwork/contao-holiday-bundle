<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoPortfolio\EventListener\Contao\DCA;

class TlManiaxContaoPortfolioSubCategory
{
    public function listSubCategories(array $arrRow): string
    {
        return '<div class="tl_content_left">'.$arrRow['title'].'</div>';
    }
}
