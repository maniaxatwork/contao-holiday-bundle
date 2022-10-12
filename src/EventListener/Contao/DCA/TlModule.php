<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoPortfolio\EventListener\Contao\DCA;

use Contao\CoreBundle\Slug\Slug;
use Contao\DataContainer;
use Contao\Input;
use Contao\StringUtil;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioSubCategory;
use Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioItem as TlManiaxContaoPortfolioItemEntity;

class TlModule
{
    protected ManagerRegistry $registry;

    public function __construct(
        ManagerRegistry $registry
    ) {
        $this->registry = $registry;
    }

    public function subCategoryOptionsCallback(): array
    {
        $subCategoryRepository = $this->registry->getRepository(TlManiaxContaoPortfolioSubCategory::class);

        $subCategories = $subCategoryRepository->findAll();

        foreach ($subCategories as $subCategory) {
            $return[$subCategory->getId()] = $subCategory->getCategory()->getTitle();

            if ('' !== $subCategory->getTitle()) {
                $return[$subCategory->getId()] .= ', '.$subCategory->getTitle();
            }
        }

        return $return;
    }
}
