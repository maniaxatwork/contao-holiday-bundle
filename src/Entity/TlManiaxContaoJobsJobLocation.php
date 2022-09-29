<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoJobs\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Maniax\ContaoJobs\Repository\TlManiaxContaoJobsJobLocationRepository")
 * @ORM\Table(name="tl_maniax_Contao_jobs_job_location")
 */
class TlManiaxContaoJobsJobLocation extends DCADefault
{
    /**
     * @ORM\JoinColumn(name="pid", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="Maniax\ContaoJobs\Entity\TlManiaxContaoJobsOrganization", inversedBy="jobLocation")
     */
    protected TlManiaxContaoJobsOrganization $organization;

    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $streetAddress = '';

    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $addressLocality = '';

    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $addressRegion = '';

    /**
     * @ORM\Column(type="string", length=32, options={"default": ""})
     */
    protected string $postalCode = '';

    /**
     * @ORM\Column(type="string", length=2, options={"default": ""})
     */
    protected string $addressCountry = '';

    /**
     * Options => ['onPremise', 'Telecommute'].
     *
     * @ORM\Column(type="string", length=32, options={"default": "onPremise"})
     */
    protected string $jobTypeLocation = 'onPremise';

    /**
     * @return TlManiaxContaoJobsOrganization
     */
    public function getOrganization(): TlManiaxContaoJobsOrganization
    {
        return $this->organization;
    }

    /**
     * @param TlManiaxContaoJobsOrganization $organization
     *
     * @return TlManiaxContaoJobsJobLocation
     */
    public function setOrganization(TlManiaxContaoJobsOrganization $organization): self
    {
        $this->organization = $organization;

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
     * @param string $streetAddress
     *
     * @return TlManiaxContaoJobsJobLocation
     */
    public function setStreetAddress(string $streetAddress): self
    {
        $this->streetAddress = $streetAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLocality(): string
    {
        return $this->addressLocality;
    }

    /**
     * @param string $addressLocality
     *
     * @return TlManiaxContaoJobsJobLocation
     */
    public function setAddressLocality(string $addressLocality): self
    {
        $this->addressLocality = $addressLocality;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressRegion(): string
    {
        return $this->addressRegion;
    }

    /**
     * @param string $addressRegion
     *
     * @return TlManiaxContaoJobsJobLocation
     */
    public function setAddressRegion(string $addressRegion): self
    {
        $this->addressRegion = $addressRegion;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     *
     * @return TlManiaxContaoJobsJobLocation
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressCountry(): string
    {
        return $this->addressCountry;
    }

    /**
     * @param string $addressCountry
     *
     * @return TlManiaxContaoJobsJobLocation
     */
    public function setAddressCountry(string $addressCountry): self
    {
        $this->addressCountry = $addressCountry;

        return $this;
    }

    /**
     * @return string
     */
    public function getJobTypeLocation(): string
    {
        return $this->jobTypeLocation;
    }

    /**
     * @param string $jobTypeLocation
     *
     * @return TlManiaxContaoJobsJobLocation
     */
    public function setJobTypeLocation(string $jobTypeLocation): self
    {
        $this->jobTypeLocation = $jobTypeLocation;

        return $this;
    }
}
