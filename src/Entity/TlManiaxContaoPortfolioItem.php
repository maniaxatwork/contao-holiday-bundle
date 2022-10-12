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
 * Class TlManiaxContaoPortfolioItem.
 *
 * @ORM\Entity(repositoryClass="Maniax\ContaoPortfolio\Repository\TlManiaxContaoPortfolioItemRepository")
 * @ORM\Table(name="tl_maniax_contao_portfolio_item")
 */
class TlManiaxContaoPortfolioItem extends DCADefault
{
    /**
     * @ORM\Column(type="text", nullable=true, options={"default": NULL})
     */
    protected ?string $subCategory;

    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $title = '';

    /**
     * @ORM\Column(type="text", nullable=true, options={"default": NULL})
     */
    protected ?string $alias;

    /**
     * @ORM\Column(type="text", nullable=true, options={"default": NULL})
     */
    protected ?string $description;

    /**
     * @ORM\Column(type="boolean", nullable=false, options={"default": false})
     */
    protected bool $published;

    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $cssClass = '';

    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $url;

    /**
     * @ORM\Column(type="string", length=10, nullable=false, options={"default": ""})
     */
    protected string $start;

    /**
     * @ORM\Column(type="string", length=10, nullable=false, options={"default": ""})
     */
    protected string $stop;

    /**
     * @ORM\Column(type="string", length=1, nullable=false, options={"fixed"=true, "default"=""})
     */
    protected bool $addImage;

    /**
     * @ORM\Column (type="binary_string", nullable=true)
     */
    protected $singleSRC;

    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $metaTitle = '';

    /**
     * @ORM\Column(type="text", nullable=true, options={"default": NULL})
     */
    protected ?string $metaDescription;


    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return TlManiaxContaoPortfolioItem
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

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
     * @return TlManiaxContaoPortfolioItem
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubCategory(): ?string
    {
        return $this->subCategory;
    }

    /**
     * @param string|null $subCategory
     *
     * @return TlManiaxContaoPortfolioItem
     */
    public function setSubCategory(?string $subCategory): self
    {
        $this->subCategory = $subCategory;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param string|null $alias
     *
     * @return TlManiaxContaoPortfolioItem
     */
    public function setAlias(?string $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * @return string
     */
    public function getStart(): string
    {
        return $this->start;
    }

    /**
     * @param string $start
     *
     * @return TlManiaxContaoPortfolioItem
     */
    public function setStart(string $start): self
    {
        $this->start = $start;

        return $this;
    }

    /**
     * @return string
     */
    public function getStop(): string
    {
        return $this->stop;
    }

    /**
     * @param string $stop
     *
     * @return TlManiaxContaoPortfolioItem
     */
    public function setStop(string $stop): self
    {
        $this->stop = $stop;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPublished(): bool
    {
        return $this->published;
    }

    /**
     * @param bool $published
     *
     * @return TlManiaxContaoPortfolioItem
     */
    public function setPublished(bool $published): self
    {
        $this->published = $published;

        return $this;
    }

    /**
     * @return string
     */
    public function getCssClass(): string
    {
        return $this->cssClass;
    }

    /**
     * @param string $cssClass
     *
     * @return TlManiaxContaoPortfolioItem
     */
    public function setCssClass(string $cssClass): self
    {
        $this->cssClass = $cssClass;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAddImage(): bool
    {
        return $this->addImage;
    }

    /**
     * @param bool $addImage
     */
    public function setAddImage(bool $addImage): void
    {
        $this->addImage = $addImage;
    }

    /**
     * @return mixed
     */
    public function getSingleSRC()
    {
        return $this->singleSRC;
    }

    /**
     * @param mixed $singleSRC
     */
    public function setSingleSRC($singleSRC): void
    {
        $this->singleSRC = $singleSRC;
    }

    /**
     * @return string
     */
    public function getMetaTitle(): string
    {
        return $this->metaTitle;
    }

    /**
     * @param string $metaTitle
     *
     * @return TlManiaxContaoPortfolioItem
     */
    public function setMetaTitle(string $metaTitle): self
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    /**
     * @param string|null $metaDescription
     *
     * @return TlManiaxContaoPortfolioItem
     */
    public function setMetaDescription(?string $metaDescription): self
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }
}
