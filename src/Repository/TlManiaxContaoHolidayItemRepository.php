<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Holiday Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoHoliday\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;
use Maniax\ContaoHoliday\Entity\TlManiaxContaoHolidayItem;
use Doctrine\ORM\NoResultException;

class TlManiaxContaoHolidayItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TlManiaxContaoHolidayItem::class);
    }

    public function findAllByPublished(): array
    {
        return $this->createQueryBuilder('a')
            ->andwhere('a.published=:published')
            ->andWhere('a.showBefore<=:time')
            ->andWhere('a.holidayStop>:time')
            ->setParameter('published', '1')
            ->setParameter('time', time())
            ->getQuery()
            ->getResult(AbstractQuery::HYDRATE_OBJECT);
    }

    public function findAllByPublishedAndViewable(): array
    {
        return $this->createQueryBuilder('a')
            ->andwhere('a.published=:published')
            ->andWhere('a.showBefore<=:time')
            ->andWhere('a.holidayStop>:time')
            ->setParameter('published', '1')
            ->setParameter('time', time())
            ->getQuery()
            ->getResult(AbstractQuery::HYDRATE_OBJECT);
    }

    /**
     * @throws NonUniqueResultException
     * @throws \Doctrine\ORM\NoResultException
     */
    public function findPublishedById(string $id): ?TlManiaxContaoHolidayItem
    {
        $qb = $this->createQueryBuilder('a');

        $qb
            ->where('a.id=:id')
            ->setParameter('id', $id);

        $qb
            ->andwhere('a.published=:published')
            ->andWhere('a.showBefore<=:time')
            ->andWhere('a.holidayStop>:time')
            ->setParameter('published', '1')
            ->setParameter('time', time())
        ;

        try {
            return $qb->getQuery()->getSingleResult(AbstractQuery::HYDRATE_OBJECT);
        } catch (NoResultException $ex) {
            return null;
        }
    }
}
