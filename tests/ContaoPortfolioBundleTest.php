<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace maniaxatwork\ContaoPortfolioBundle\Tests;

use maniaxatwork\ContaoPortfolioBundle\ContaoPortfolioBundle;
use PHPUnit\Framework\TestCase;

class ContaoPortfolioBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoPortfolioBundle();

        $this->assertInstanceOf('maniaxatwork\ContaoPortfolioBundle\ContaoPortfolioBundle', $bundle);
    }
}
