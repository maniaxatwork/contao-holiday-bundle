<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs  Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

use Composer\InstalledVersions;

array_insert($GLOBALS['BE_MOD'], 1, [
    'maniax_contao_jobs' => [
        'maniax_contao_jobs_offers' => [
            'tables' => ['tl_maniax_contao_jobs_offer', 'tl_content'],
        ],
        'maniax_contao_jobs_organizations' => [
            'tables' => ['tl_maniax_contao_jobs_organization', 'tl_maniax_contao_jobs_job_location'],
            'hideInNavigation' => true,
        ],
        'maniax_contao_jobs_settings_employment_type' => [
            'tables' => ['tl_maniax_contao_jobs_settings_employment_type'],
            'hideInNavigation' => true,
        ],
    ],
]);

if (defined('TL_MODE') && TL_MODE == 'BE') {
    $GLOBALS['TL_CSS'][] = 'bundles/maniaxcontaojobs/jobs.min.css|static';
}

$GLOBALS['TL_MODELS'][Maniax\ContaoJobs\Contao\Model\ManiaxContaoJobsOfferModel::getTable()] = Maniax\ContaoJobs\Contao\Model\ManiaxContaoJobsOfferModel::class;
