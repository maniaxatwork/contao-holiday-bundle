<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoJobs\Helper;

use Composer\InstalledVersions;
use Contao\Controller;
use Contao\CoreBundle\Image\Studio\Studio;
use Contao\Date;
use Contao\FilesModel;
use Contao\FrontendTemplate;
use Contao\StringUtil;
use Contao\System;
use Doctrine\Persistence\ManagerRegistry;
use Maniax\ContaoJobs\Entity\TlManiaxContaoJobsJobLocation;
use Maniax\ContaoJobs\Entity\TlManiaxContaoJobsOffer;
use Symfony\Component\HttpFoundation\RequestStack;

class MetaFieldsHelper
{
    protected EmploymentType $employmentTypeHelper;

    protected ManagerRegistry $registry;

    protected RequestStack $requestStack;

    public function __construct(
        EmploymentType $employmentTypeHelper,
        ManagerRegistry $registry,
        RequestStack $requestStack
    ) {
        $this->employmentTypeHelper = $employmentTypeHelper;
        $this->registry = $registry;
        $this->requestStack = $requestStack;
    }

    public function getMetaFields(TlManiaxContaoJobsOffer $jobOffer, $imageSize = null): array
    {
        $metaFields = [];

        if (version_compare(InstalledVersions::getVersion('contao/core-bundle'), '4.13', '>=')) {
            $mainRequest = $this->requestStack->getMainRequest();
        } else {
            $mainRequest = $this->requestStack->getMasterRequest();
        }

        $metaFields['publicationDateFormatted'] = Date::parse(Date::getNumericDateFormat(), $jobOffer->getDatePosted());
        $metaFields['employmentTypeFormatted'] = $this->employmentTypeHelper->getEmploymentTypesFormatted($jobOffer->getEmploymentType());
        $metaFields['locationFormatted'] = $this->formatLocation($jobOffer);
        $metaFields['addressLocalityFormatted'] = $this->formatAddressLocality($jobOffer);
        $metaFields['title'] = Controller::replaceInsertTags($jobOffer->getTitle());
        $metaFields['description'] = Controller::replaceInsertTags($jobOffer->getDescription());
        $metaFields['alias'] = $jobOffer->getAlias();
        if ($imageSize && $jobOffer->isAddImage()) {
            $file = FilesModel::findByUuid(StringUtil::binToUuid($jobOffer->getSingleSRC()));
            if ($file) {
                $tpl = new FrontendTemplate('ce_image');
                if (version_compare(InstalledVersions::getVersion('contao/core-bundle'), '4.11', '>=')) {
                    /** @var Studio $studio */
                    $studio = System::getContainer()->get('contao.image.studio');
                    $figure = $studio->createFigureBuilder()->fromUuid($jobOffer->getSingleSRC())->setSize($imageSize)->build();
                    $figure->applyLegacyTemplateData($tpl);
                } else {
                    Controller::addImageToTemplate($tpl, ['singleSRC' => $file->path, 'size' => $imageSize]);
                }
                $metaFields['image'] = $tpl->parse();
            }
        }

        if (!isset($metaFields['image'])) {
            $metaFields['image'] = '';
        }

        return $metaFields;
    }

    public function formatLocation(TlManiaxContaoJobsOffer $jobOffer): string
    {
        return $this->formatAddressLocality($jobOffer);
    }

    public function formatAddressLocality(TlManiaxContaoJobsOffer $jobOffer): string
    {
        $locationsTemp = [];

        if ($jobOffer->isRemote()) {
            $locationsTemp[] = $GLOBALS['TL_LANG']['MSC']['MANIAX_CONTAO_JOBS']['remote'];
        }

        if (!$jobOffer->isRemote() || !$jobOffer->isOnlyRemote()) {
            $locations = StringUtil::deserialize($jobOffer->getJobLocation());
            $locationRepository = $this->registry->getRepository(TlManiaxContaoJobsJobLocation::class);


            foreach ($locations as $location) {
                $locationEntity = $locationRepository->find($location);
                $locationsTemp[] = $locationEntity->getAddressLocality();
            }
        }

        return implode(', ', $locationsTemp);
    }
}
