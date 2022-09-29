<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoJobs\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Maniax\ContaoJobs\ManiaxContaoJobsBundle;

class ManiaxContaoJobsBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ManiaxContaoJobsBundle();

        $this->assertInstanceOf('Maniax\ContaoJobs\ManiaxContaoJobsBundle', $bundle);
    }
}
