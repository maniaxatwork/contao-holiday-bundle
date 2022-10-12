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
class TlManiaxContaoContaoPortfolio extends DCADefault
{
    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $title = '';

    /**
     * @var Collection|TlManiaxContaoPortfolioSubCategory[]
     * @ORM\OneToMany(targetEntity="Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioSubCategory", mappedBy="category")
     */
    protected Collection $subCategory;

    public function __construct()
    {
        $this->subCategory = new ArrayCollection();
    }

    /**
     * @return Collection|TlManiaxContaoPortfolioSubCategory[]
     */
    public function getSubCategory(): Collection
    {
        return $this->subCategory;
    }

    /**
     * @param TlManiaxContaoPortfolioSubCategory $subCategory
     *
     * @return $this
     */
    public function addSubCategory(TlManiaxContaoPortfolioSubCategory $subCategory): self
    {
        $this->subCategory->add($subCategory);

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
