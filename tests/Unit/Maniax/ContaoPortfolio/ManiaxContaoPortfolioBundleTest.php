<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoPortfolio\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Maniax\ContaoPortfolio\ManiaxContaoPortfolioBundle;

class ManiaxContaoPortfolioBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ManiaxContaoPortfolioBundle();

        $this->assertInstanceOf('Maniax\ContaoPortfolio\ManiaxContaoPortfolioBundle', $bundle);
    }
}
