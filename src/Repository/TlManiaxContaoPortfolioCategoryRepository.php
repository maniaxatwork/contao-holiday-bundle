<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoPortfolio\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\AbstractQuery;
use Doctrine\Persistence\ManagerRegistry;
use Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioCategory;

class TlManiaxContaoPortfolioCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TlManiaxContaoPortfolioCategory::class);
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

    /**
     * @throws NonUniqueResultException
     * @throws \Doctrine\ORM\NoResultException
     */
    public function findPublishedById(int $id): ?TlManiaxContaoPortfolioCategory
    {
        $qb = $this->createQueryBuilder('a');

        $qb
            ->where('a.id=:id')
            ->setParameter('id', $id);

        $qb
            ->andwhere('a.published=:published')
            ->andWhere('a.start<=:time OR a.start=:empty')
            ->andWhere('a.stop>:time OR a.stop=:empty')
            ->setParameter('published', '1')
            ->setParameter('time', time())
            ->setParameter('empty', '')
        ;

        try {
            return $qb->getQuery()->getSingleResult(AbstractQuery::HYDRATE_OBJECT);
        } catch (NoResultException $ex) {
            return null;
        }
    }
}
