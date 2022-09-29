<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoJobs\EventListener\Contao;

use Contao\Config;
use Contao\PageModel;
use Contao\ModuleModel;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManagerInterface;
use Contao\CoreBundle\ServiceAnnotation\Hook;
use Maniax\ContaoJobs\Entity\TlManiaxContaoJobsOffer;

/**
 * @Hook("getSearchablePages")
 */
class GetSearchablePagesListener
{
    /**
     * @var EntityManagerInterface
     */
    protected $registry;

    /**
     * @var Connection
     */
    private Connection $connection;

    public function __construct(Connection $connection, EntityManagerInterface $registry)
    {
        $this->connection = $connection;
        $this->registry = $registry;
    }

    public function __invoke(array $pages, $rootId = null, bool $isSitemap = false, string $language = null): array
    {
        $processed = [];

        $jobOfferRepo = $this->registry->getRepository(TlManiaxContaoJobsOffer::class);

        $modules = ModuleModel::findByType('maniax_contao_jobs_offer_list');
        if ($modules) {
            foreach ($modules as $module) {
                $jobs = $jobOfferRepo->findAllPublished();
                foreach ($jobs as $job) {
                    if (!\in_array($job->getId(), $processed, true)) {
                        if ($page = $this->generateJobOfferUrl($job, $module)) {
                            $pages[] = $page;
                            $processed[] = $job->getId();
                        }
                    }
                }
            }
        }

        return $pages;
    }

    public function generateJobOfferUrl(TlTlManiaxContaoJobsOffer $jobOffer, ModuleModel $model): ?string
    {
        $objPage = $model->getRelated('jumpTo');

        if (!$objPage instanceof PageModel) {
            return null;
        }

        $params = (Config::get('useAutoItem') ? '/' : '/items/').($jobOffer->getAlias() ?: $jobOffer->getId());

        return ampersand($objPage->getAbsoluteUrl($params));
    }
}
