<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoJobs\EventListener\Contao\DCA;

use Contao\DataContainer;
use Maniax\ContaoJobs\Helper\DataTypeMapper;
use Maniax\ContaoJobs\Helper\EmploymentType;

class TlManiaxContaoJobsSettingsEmploymentType
{
    protected DataTypeMapper $dataTypeMapper;
    protected EmploymentType $employmentTypeHelper;

    public function __construct(
        DataTypeMapper $dataTypeMapper,
        EmploymentType $employmentTypeHelper
    ) {
        $this->dataTypeMapper = $dataTypeMapper;
        $this->employmentTypeHelper = $employmentTypeHelper;
    }

    public function googleForJobsMappingOptionsCallback(): array
    {
        $employmentTypes = $this->employmentTypeHelper->getGoogleForJobsEmploymentTypes();

        $return = [];
        foreach ($employmentTypes as $employmentType) {
            $return[$employmentType] = $this->employmentTypeHelper->getEmploymentTypeName($employmentType);
        }

        return $return;
    }
}
