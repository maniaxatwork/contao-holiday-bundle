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

use Contao\CoreBundle\Slug\Slug;
use Contao\DataContainer;
use Contao\Input;
use Contao\StringUtil;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Maniax\ContaoJobs\Entity\TlManiaxContaoJobsJobLocation;
use Maniax\ContaoJobs\Entity\TlManiaxContaoJobsOffer as TlManiaxContaoJobsOfferEntity;
use Maniax\ContaoJobs\Helper\EmploymentType;

class TlModule
{
    protected ManagerRegistry $registry;

    public function __construct(
        ManagerRegistry $registry
    ) {
        $this->registry = $registry;
    }

    public function jobLocationOptionsCallback(): array
    {
        $jobLocationRepository = $this->registry->getRepository(TlManiaxContaoJobsJobLocation::class);

        $jobLocations = $jobLocationRepository->findAll();

        $return = ['remote' => $GLOBALS['TL_LANG']['MSC']['MANIAX_CONTAO_JOBS']['remote']];
        foreach ($jobLocations as $jobLocation) {
            $return[$jobLocation->getId()] = $jobLocation->getOrganization()->getName().': '.$jobLocation->getStreetAddress();

            if ('' !== $jobLocation->getAddressLocality()) {
                $return[$jobLocation->getId()] .= ', '.$jobLocation->getAddressLocality();
            }
        }

        return $return;
    }
}
