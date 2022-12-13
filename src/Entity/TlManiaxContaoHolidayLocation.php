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
 * Class TlManiaxContaoHolidayLocation.
 *
 * @ORM\Entity(repositoryClass="Maniax\ContaoHoliday\Repository\TlManiaxContaoHolidayLocationRepository")
 * @ORM\Table(name="tl_maniax_contao_holiday_location")
 */
class TlManiaxContaoHolidayLocation extends DCADefault
{

    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $street = '';

        /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $locality = '';

    /**
     * @ORM\Column(type="boolean", nullable=false, options={"default": false})
     */
    protected bool $published;

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
     * @return TlManiaxContaoHolidayLocation
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
     * @return TlManiaxContaoHolidayLocation
     */
    public function setLocality(string $locality): self
    {
        $this->locality = $locality;

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
     * @return TlManiaxContaoHolidayLocation
     */
    public function setPublished(bool $published): self
    {
        $this->published = $published;

        return $this;
    }
}
