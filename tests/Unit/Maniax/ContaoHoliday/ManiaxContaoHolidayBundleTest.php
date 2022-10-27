<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Holiday Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoHoliday\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Maniax\ContaoHoliday\ManiaxContaoHolidayBundle;

class ManiaxContaoHolidayBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ManiaxContaoHolidayBundle();

        $this->assertInstanceOf('Maniax\ContaoHoliday\ManiaxContaoHolidayBundle', $bundle);
    }
}
