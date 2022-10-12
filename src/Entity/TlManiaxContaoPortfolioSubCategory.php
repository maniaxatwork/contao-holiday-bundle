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

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Maniax\ContaoPortfolio\Repository\TlManiaxContaoPortfolioSubCategoryRepository")
 * @ORM\Table(name="tl_maniax_contao_portfolio_subcategory")
 */
class TlManiaxContaoPortfolioSubCategory extends DCADefault
{
    /**
     * @ORM\JoinColumn(name="pid", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioCategory", inversedBy="category")
     */
    protected TlManiaxContaoPortfolioCategory $category;

    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $title = '';

    /**
     * @return TlManiaxContaoPortfolioCategory
     */
    public function getCategory(): TlManiaxContaoPortfolioCategory
    {
        return $this->category;
    }

    /**
     * @param TlManiaxContaoPortfolioCategory $category
     *
     * @return TlManiaxContaoPortfolioSubCategory
     */
    public function setCategory(TlManiaxContaoPortfolioCategory $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress(): string
    {
        return $this->streetAddress;
    }

    /**
     * @param string $title
     *
     * @return TlManiaxContaoPortfolioSubCategory
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}
