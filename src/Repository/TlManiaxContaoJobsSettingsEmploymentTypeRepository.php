<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoJobs\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Maniax\ContaoJobs\Entity\TlManiaxContaoJobsSettingsEmploymentType;

class TlManiaxContaoJobsSettingsEmploymentTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TlManiaxContaoJobsSettingsEmploymentType::class);
    }

    public function findAllIndexed(): array
    {
        return $this
            ->createQueryBuilder('e', 'e.id')
            ->getQuery()
            ->getResult()
        ;
    }
}
