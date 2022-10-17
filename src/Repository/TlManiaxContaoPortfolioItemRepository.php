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
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;
use Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioItem;
use Doctrine\ORM\NoResultException;

class TlManiaxContaoPortfolioItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TlManiaxContaoPortfolioItem::class);
    }

    public function findAllPublished(): array
    {
        return $this->createQueryBuilder('a')
            ->andwhere('a.published=:published')
            ->andWhere('a.start<:time OR a.start=:empty')
            ->andWhere('a.stop>:time OR a.stop=:empty')
            ->setParameter('published', '1')
            ->setParameter('time', time())
            ->setParameter('empty', '')
            ->getQuery()
            ->getResult(AbstractQuery::HYDRATE_OBJECT);
    }

    /**
     * @throws NonUniqueResultException
     */
    public function doesAliasExist(string $alias, int $id = null): bool
    {
        $qb = $this->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->where('a.alias=:alias');

        if ($id) {
            $qb->andWhere('a.id!=:id')
                ->setParameter('id', $id);
        }

        $portfolioItem = $qb->setParameter('alias', $alias)
            ->getQuery()
            ->getOneOrNullResult(AbstractQuery::HYDRATE_SINGLE_SCALAR);

        if ($portfolioItem > 0) {
            return true;
        }

        return false;
    }

    public function findAllPublishedByCategory(array $categories, ?string $sortBy = null, ?string $order = null): array
    {
        $qb = $this->createQueryBuilder('a');

        $qb
            ->andwhere('a.published=:published')
            ->andWhere('a.start<:time OR a.start=:empty')
            ->andWhere('a.stop>:time OR a.stop=:empty')
            ->setParameter('published', '1')
            ->setParameter('time', time())
            ->setParameter('empty', '')
        ;

        $criterionCategory = [];

        foreach ($categories as $category) {
            foreach (explode('|', $category) as $s) {
                $criterionCategory[] = "a.category LIKE '%\"".$s."\"%'";
            }
        }

        if (\count($criterionCategory)) {
            $qb->andWhere(implode(' OR ', $criterionCategory));
        }

        if (null !== $sortBy) {
            $qb->orderBy('a.'.$sortBy, $order);
        }

        return $qb->getQuery()->getResult(AbstractQuery::HYDRATE_OBJECT);
    }

    /**
     * @throws NonUniqueResultException
     * @throws \Doctrine\ORM\NoResultException
     */
    public function findPublishedByIdOrAlias(string $alias): ?TlManiaxContaoPortfolioItem
    {
        $qb = $this->createQueryBuilder('a');

        if (!preg_match('/^[1-9]\d*$/', $alias)) {
            $qb
                ->where('a.alias=:alias')
                ->setParameter('alias', $alias);
        } else {
            $qb
                ->where('a.id=:id')
                ->setParameter('id', $alias);
        }

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
