<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Holiday Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoHoliday\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class TlManiaxContaoHolidayItem.
 *
 * @ORM\Entity(repositoryClass="Maniax\ContaoHoliday\Repository\TlManiaxContaoHolidayItemRepository")
 * @ORM\Table(name="tl_maniax_contao_holiday_item")
 */
class TlManiaxContaoHolidayItem extends DCADefault
{
    /**
     * @ORM\Column(type="string", length=10, nullable=false, options={"default": ""})
     */
    protected string $holidayStart;

    /**
     * @ORM\Column(type="string", length=10, nullable=false, options={"default": ""})
     */
    protected string $holidayStop;

    /**
     * @ORM\Column(type="integer", options={"default": 14})
     */
    protected string $showBefore;

    /**
     * @ORM\Column(type="string", nullable=false, options={"default": "standard"})
     */
    protected string $extend;

    /**
     * @ORM\Column(type="text", nullable=true, options={"default": NULL})
     */
    protected string $extendText;

    /**
     * @ORM\Column(type="boolean", nullable=false, options={"default": false})
     */
    protected bool $footerline;

    /**
     * @ORM\Column(type="text", nullable=true, options={"default": NULL})
     */
    protected string $footerlineText;

    /**
     * @ORM\Column(type="blob", nullable=true, options={"default": NULL})
     */
    protected array $vertretungDoc1;

    /**
     * @ORM\Column(type="text", nullable=true, options={"default": NULL})
     */
    protected string $doc1;

        /**
     * @ORM\Column(type="text", nullable=true, options={"default": NULL})
     */
    protected string $doc2;

        /**
     * @ORM\Column(type="text", nullable=true, options={"default": NULL})
     */
    protected string $doc3;

        /**
     * @ORM\Column(type="text", nullable=true, options={"default": NULL})
     */
    protected string $doc4;

    /**
     * @ORM\Column(type="boolean", nullable=false, options={"default": false})
     */
    protected bool $published;

    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $cssClass = '';

    /**
     * @ORM\Column(type="string", length=10, nullable=false, options={"default": ""})
     */
    protected string $start;

    /**
     * @ORM\Column(type="string", length=10, nullable=false, options={"default": ""})
     */
    protected string $stop;


    /**
     * @return string
     */
    public function getHolidayStart(): string
    {
        return $this->holidayStart;
    }

    /**
     * @param string $holidayStart
     *
     * @return TlManiaxContaoHolidayItem
     */
    public function setHolidayStart(string $holidayStart): self
    {
        $this->holidayStart = $holidayStart;

        return $this;
    }

    /**
     * @return string
     */
    public function getHolidayStop(): string
    {
        return $this->holidayStop;
    }

    /**
     * @param string $holidayStop
     *
     * @return TlManiaxContaoHolidayItem
     */
    public function setHolidayStop(string $holidayStop): self
    {
        $this->holidayStop = $holidayStop;

        return $this;
    }

    /**
     * @return integer
     */
    public function getShowBefore()
    {
        return $this->showBefore;
    }

    /**
     * @param mixed $showBefore
     *
     * @return TlManiaxContaoHolidayItem
     */
    public function setShowBefore($showBefore): void
    {
        $this->showBefore = $showBefore;
    }

    /**
     * @return string
     */
    public function getExtend(): string
    {
        return $this->extend;
    }

    /**
     * @param string $extend
     *
     * @return TlManiaxContaoHolidayItem
     */
    public function setExtend(string $extend): self
    {
        $this->extend = $extend;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExtendText(): string
    {
        return $this->extendText;
    }

    /**
     * @param string|null $extendText
     *
     * @return TlManiaxContaoHolidayItem
     */
    public function setExtendText(string $extendText): self
    {
        $this->extendText = $extendText;

        return $this;
    }

       /**
     * @return bool
     */
    public function isFooterline(): bool
    {
        return $this->footerline;
    }

    /**
     * @param bool $footerline
     *
     * @return TlManiaxContaoHolidayItem
     */
    public function setFooterline(bool $footerline): self
    {
        $this->footerline = $footerline;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFooterlineText(): string
    {
        return $this->footerlineText;
    }

    /**
     * @param string|null $footerlineText
     *
     * @return TlManiaxContaoHolidayItem
     */
    public function setFooterlineText(string $footerlineText): self
    {
        $this->footerlineText = $footerlineText;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getVertretungDoc1(): array
    {
        return unserialize(stream_get_contents($this->vertretungDoc1));
    }

    /**
     * @param array|null $vertretungDoc1
     *
     * @return TlManiaxContaoHolidayItem
     */
    public function setVertretungDoc1(?array $vertretungDoc1): self
    {
        $this->vertretungDoc1 = serialize($vertretungDoc1);

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDoc1(): ?string
    {
        return $this->doc1;
    }

    /**
     * @param string|null $doc1
     *
     * @return TlManiaxContaoHolidayItem
     */
    public function setDoc1(?string $doc1): self
    {
        $this->doc1 = $doc1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDoc2(): ?string
    {
        return $this->doc2;
    }

    /**
     * @param string|null $doc2
     *
     * @return TlManiaxContaoHolidayItem
     */
    public function setDoc2(?string $doc2): self
    {
        $this->doc2 = $doc2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDoc3(): ?string
    {
        return $this->doc3;
    }

    /**
     * @param string|null $doc3
     *
     * @return TlManiaxContaoHolidayItem
     */
    public function setDoc3(?string $doc3): self
    {
        $this->doc3 = $doc3;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDoc4(): ?string
    {
        return $this->doc4;
    }

    /**
     * @param string|null $doc4
     *
     * @return TlManiaxContaoHolidayItem
     */
    public function setDoc4(?string $doc4): self
    {
        $this->doc4 = $doc4;

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
     * @return TlManiaxContaoHolidayItem
     */
    public function setCssClass(string $cssClass): self
    {
        $this->cssClass = $cssClass;

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
     * @return TlManiaxContaoHolidayItem
     */
    public function setPublished(bool $published): self
    {
        $this->published = $published;

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
     * @return TlManiaxContaoHolidayItem
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
     * @return TlManiaxContaoHolidayItem
     */
    public function setStop(string $stop): self
    {
        $this->stop = $stop;

        return $this;
    }
}
