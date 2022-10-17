<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoPortfolio\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class TlManiaxContaoPortfolioCategory.
 *
 * @ORM\Entity
 * @ORM\Table(name="tl_maniax_contao_portfolio_category")
 */
class TlManiaxContaoPortfolioCategory extends DCADefault
{
    /**
     * @ORM\Column(type="integer", options={"unsigned": true})
     */
    protected int $pid;

    /**
     * @ORM\Column(type="integer", options={"unsigned": true})
     */
    protected int $sorting;

    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $title = '';

    /**
     * @return int
     */
    public function getPid(): int
    {
        return $this->pid;
    }

    /**
     * @param string $pid
     *
     * @return TlManiaxContaoPortfolioCategory
     */
    public function setPid(string $pid): self
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * @return int
     */
    public function getSorting(): int
    {
        return $this->sorting;
    }

    /**
     * @param string $sorting
     *
     * @return TlManiaxContaoPortfolioCategory
     */
    public function setSorting(string $sorting): self
    {
        $this->sorting = $sorting;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return TlManiaxContaoPortfolioCategory
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}