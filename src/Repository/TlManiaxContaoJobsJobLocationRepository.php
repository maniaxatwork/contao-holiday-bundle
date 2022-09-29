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
use Doctrine\ORM\AbstractQuery;
use Doctrine\Persistence\ManagerRegistry;
use Maniax\ContaoJobs\Entity\TlManiaxContaoJobsJobLocation;

class TlManiaxContaoJobsJobLocationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TlManiaxContaoJobsJobLocation::class);
    }

    public function findAll(): array
    {
        return $this->createQueryBuilder('a')
            ->getQuery()
            ->getResult(AbstractQuery::HYDRATE_OBJECT);
    }

    public function findByMultipleIds($ids): array
    {
        $qb = $this->createQueryBuilder('l');

        return $qb
            ->where($qb->expr()->in('l.id', $ids))
            ->getQuery()
            ->getResult(AbstractQuery::HYDRATE_OBJECT);
    }
}
