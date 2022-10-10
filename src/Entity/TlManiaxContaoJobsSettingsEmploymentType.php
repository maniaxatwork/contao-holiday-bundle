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
 * @ORM\Entity(repositoryClass="Maniax\ContaoJobs\Repository\TlManiaxContaoJobsSettingsEmploymentTypeRepository")
 * @ORM\Table(name="tl_maniax_contao_jobs_settings_employment_type")
 */
class TlManiaxContaoJobsSettingsEmploymentType extends DCADefault
{
    /**
     * @ORM\Column(type="string", length=255, options={"default": ""})
     */
    protected string $title = '';

    /**
     * @ORM\Column(type="string", name="google_for_jobs_mapping", length=32, options={"default": "OTHER"})
     */
    protected string $googleForJobsMapping = '';

    /**
     * @ORM\Column (type="json", nullable=true, options={"default": NULL})
     */
    protected ?array $translation;

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
     * @return TlManiaxContaoJobsSettingsEmploymentType
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getGoogleForJobsMapping(): string
    {
        return $this->googleForJobsMapping;
    }

    /**
     * @param string $googleForJobsMapping
     *
     * @return TlManiaxContaoJobsSettingsEmploymentType
     */
    public function setGoogleForJobsMapping(string $googleForJobsMapping): self
    {
        $this->googleForJobsMapping = $googleForJobsMapping;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getTranslation(): ?array
    {
        return $this->translation;
    }

    /**
     * @param array|null $translation
     *
     * @return TlManiaxContaoJobsSettingsEmploymentType
     */
    public function setTranslation(?array $translation): self
    {
        $this->translation = $translation;

        return $this;
    }
}
