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
 * Class TlManiaxContaoHolidayDoc.
 *
 * @ORM\Entity(repositoryClass="Maniax\ContaoHoliday\Repository\TlManiaxContaoHolidayDocRepository")
 * @ORM\Table(name="doc")
 */
class TlManiaxContaoHolidayDoc extends DCADefault
{
    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $name = '';

    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $street = '';

        /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $locality = '';

        /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $telephone = '';

    /**
     * @ORM\Column(type="boolean", nullable=false, options={"default": false})
     */
    protected bool $published;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return TlManiaxContaoHolidayDoc
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     *
     * @return TlManiaxContaoHolidayDoc
     */
    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocality(): string
    {
        return $this->locality;
    }

    /**
     * @param string $locality
     *
     * @return TlManiaxContaoHolidayDoc
     */
    public function setLocality(string $locality): self
    {
        $this->locality = $locality;

        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     *
     * @return TlManiaxContaoHolidayDoc
     */
    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

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
     * @return TlManiaxContaoHolidayCategory
     */
    public function setPublished(bool $published): self
    {
        $this->published = $published;

        return $this;
    }
}
