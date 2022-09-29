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

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class TlManiaxContaoJobsOrganization.
 *
 * @ORM\Entity
 * @ORM\Table(name="tl_maniax_contao_jobs_organization")
 */
class TlManiaxContaoJobsOrganization extends DCADefault
{
    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $name = '';

    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $sameAs;

    /**
     * @ORM\Column (type="binary_string", nullable=true, options={"default": NULL})
     */
    protected string $logo;

    /**
     * @var Collection|TlManiaxContaoJobsJobLocation[]
     * @ORM\OneToMany(targetEntity="Plenta\ContaoJobsBasic\Entity\TlManiaxContaoJobsJobLocation", mappedBy="organization")
     */
    protected Collection $jobLocation;

    public function __construct()
    {
        $this->jobLocation = new ArrayCollection();
    }

    /**
     * @return Collection|TlManiaxContaoJobsJobLocation[]
     */
    public function getJobLocation(): Collection
    {
        return $this->jobLocation;
    }

    /**
     * @param TlManiaxContaoJobsJobLocation $jobLocation
     *
     * @return $this
     */
    public function addJobLocation(TlManiaxContaoJobsJobLocation $jobLocation): self
    {
        $this->jobLocation->add($jobLocation);

        return $this;
    }

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
     * @return TlManiaxContaoJobsOrganization
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSameAs(): string
    {
        return $this->sameAs;
    }

    /**
     * @param string $sameAs
     * @return TlManiaxContaoJobsOrganization
     */
    public function setSameAs(string $sameAs): TlManiaxContaoJobsOrganization
    {
        $this->sameAs = $sameAs;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * @param string|null $singleSRC
     *
     * @return TLWuerthEyeCatcher
     */
    public function setSingleSRC(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }
}
