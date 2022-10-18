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
use Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioCategory;
use Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioItem as TlManiaxContaoPortfolioItemEntity;

class TlModule
{
    protected ManagerRegistry $registry;

    public function __construct(
        ManagerRegistry $registry
    ) {
        $this->registry = $registry;
    }

    public function onCategoryOptionsCallback(): array
    {
        /** @var Input $input */
        $input = $this->framework->getAdapter(Input::class);

        // Do not generate the options for other views than listings
        if ($input->get('act') && $input->get('act') !== 'select') {
            return [];
        }

        return $this->generateOptionsRecursively();
    }

    /**
     * Generate the options recursively
     *
     * @param int    $pid
     * @param string $prefix
     *
     * @return array
     */
    private function generateOptionsRecursively($pid = 0, $prefix = '')
    {
        $options = [];
        $records = $this->db->fetchAllAssociative('SELECT * FROM tl_maniax_contao_portfolio_category WHERE pid=? ORDER BY sorting', [$pid]);

        foreach ($records as $record) {
            $options[$record['id']] = $prefix . $record['title'];

            foreach ($this->generateOptionsRecursively($record['id'], $record['title'] . ' / ') as $k => $v) {
                $options[$k] = $v;
            }
        }

        return $options;
    }
}
