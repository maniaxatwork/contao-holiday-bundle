<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoJobs\GoogleForJobs;

use Contao\CoreBundle\Asset\ContaoContext;
use Contao\CoreBundle\Image\PictureFactory;
use Contao\Environment;
use Contao\FilesModel;
use Contao\Image\PictureConfiguration;
use Contao\Image\PictureConfigurationItem;
use Contao\Image\ResizeConfiguration;
use Contao\StringUtil;
use Doctrine\Persistence\ManagerRegistry;
use Maniax\ContaoJobs\Entity\TlManiaxContaoJobsJobLocation;
use Maniax\ContaoJobs\Entity\TlManiaxContaoJobsOffer;
use Maniax\ContaoJobs\Entity\TlManiaxContaoJobsOrganization;
use Maniax\ContaoJobs\Helper\EmploymentType;
use Maniax\ContaoJobs\Helper\NumberHelper;
use Symfony\Component\HttpFoundation\RequestStack;

class GoogleForJobs
{
    protected ManagerRegistry $registry;
    protected PictureFactory $pictureFactory;
    protected ContaoContext $contaoFileContext;
    protected EmploymentType $employmentTypeHelper;

    protected string $projectDir;

    public function __construct(
        ManagerRegistry $registry,
        PictureFactory $pictureFactory,
        ContaoContext $contaoFileContext,
        EmploymentType $employmentTypeHelper,
        string $projectDir
    ) {
        $this->registry = $registry;
        $this->pictureFactory = $pictureFactory;
        $this->contaoFileContext = $contaoFileContext;
        $this->employmentTypeHelper = $employmentTypeHelper;
        $this->projectDir = $projectDir;
    }

    public function generateStructuredData(?TlManiaxContaoJobsOffer $jobOffer): ?string
    {
        if (false === $this->checkPrerequisites($jobOffer)) {
            return null;
        }

        $arrStructuredData['@context'] = 'https://schema.org';
        $arrStructuredData['@type'] = 'JobPosting';
        $arrStructuredData['title'] = StringUtil::restoreBasicEntities($jobOffer->getTitle());
        $arrStructuredData['datePosted'] = date('c', (int) $jobOffer->getDatePosted());

        if (!empty($jobOffer->getValidThrough())) {
            $arrStructuredData['validThrough'] = date('Y-m-d\TH:i:sP', (int) $jobOffer->getValidThrough());
        }

        if (null !== ($description = $this->sanitizeDescription($jobOffer->getDescription()))) {
            $arrStructuredData['description'] = $description;
        }

        $employmentType = $this->employmentTypeHelper->getMappedEmploymentTypesForGoogleForJobs($jobOffer->getEmploymentType());

        if (null !== $employmentType) {
            if (1 === \count($employmentType)) {
                $arrStructuredData['employmentType'] = $employmentType[0];
            } else {
                $arrStructuredData['employmentType'] = $employmentType;
            }
        }

        $arrStructuredData['directApply'] = $jobOffer->getDirectApply();

        $arrStructuredData = $this->generateJobLocation($jobOffer, $arrStructuredData);
        $arrStructuredData = $this->generateHiringOrganization($jobOffer, $arrStructuredData);
        $arrStructuredData = $this->generateSalary($jobOffer, $arrStructuredData);

        $json = json_encode($arrStructuredData);

        if (false === $json) {
            return null;
        }

        return '<script type="application/ld+json">'.$json.'</script>';
    }

    public function generateHiringOrganization(TlManiaxContaoJobsOffer $jobOffer, array $structuredData): array
    {
        $jobLocationIds = $jobOffer->getJobLocation();
        $jobLocationRepository = $this->registry->getRepository(TlManiaxContaoJobsJobLocation::class);

        if (null !== $jobLocationIds) {
            $jobLocations = StringUtil::deserialize($jobLocationIds);

            $jobLocation = $jobLocationRepository->find($jobLocations[0]);
            $hiringOrganization = $jobLocation->getOrganization();

            $structuredData['hiringOrganization'] = [];
            $structuredData['hiringOrganization']['@type'] = 'Organization';

            $structuredData['hiringOrganization']['name'] = StringUtil::restoreBasicEntities($hiringOrganization->getName());

            if ('' !== $hiringOrganization->getSameAs()) {
                $sameAs = $hiringOrganization->getSameAs();

                if ('http' != substr($sameAs, 0, 4)) {
                    $sameAs = 'https://'.$sameAs;
                }

                $structuredData['hiringOrganization']['sameAs'] = $sameAs;
            }

            $structuredData = $this->generateLogo($hiringOrganization, $structuredData);
        }

        return $structuredData;
    }

    public function generateLogo(TlManiaxContaoJobsOrganization $hiringOrganization, array $structuredData): array
    {
        $uuid = $hiringOrganization->getLogo();

        if (null !== $uuid && '' !== $uuid) {
            $image = FilesModel::findByUuid($uuid);
            $staticUrl = $this->contaoFileContext->getStaticUrl();

            $imageConfigItem = new PictureConfigurationItem();
            $resizeConfig = new ResizeConfiguration();
            $pictureConfiguration = new PictureConfiguration();

            // Set sizes
            $resizeConfig->setWidth(700);
            $resizeConfig->setHeight(700);
            $resizeConfig->setZoomLevel(100);
            $resizeConfig->setMode(ResizeConfiguration::MODE_PROPORTIONAL);
            $pictureConfiguration->setSize($imageConfigItem->setResizeConfig($resizeConfig));

            // Create Contao picture factory object
            $picture = $this->pictureFactory->create(
                $this->projectDir.'/'.$image->path,
                $pictureConfiguration
            );

            $imgSrc = $picture->getImg($this->projectDir, $staticUrl)['src'];

            $structuredData['hiringOrganization']['logo'] = Environment::get('url').'/'.$imgSrc;
        }

        return $structuredData;
    }

    public function generateJobLocation(TlManiaxContaoJobsOffer $jobOffer, array $structuredData): array
    {
        $jobLocationIds = $jobOffer->getJobLocation();
        $jobLocationRepository = $this->registry->getRepository(TlManiaxContaoJobsJobLocation::class);

        $structuredDataTemp = [];

        if (null !== $jobLocationIds && (!$jobOffer->isRemote() || !$jobOffer->isOnlyRemote())) {
            $jobLocations = StringUtil::deserialize($jobLocationIds);

            foreach ($jobLocations as $jobLocationId) {
                $jobLocation = $jobLocationRepository->find($jobLocationId);

                $jobLocationTemp = [];
                $jobLocationTemp['@type'] = 'Place';
                $jobLocationTemp['address'] = [];
                $jobLocationTemp['address']['@type'] = 'PostalAddress';

                if ('' !== $jobLocation->getStreetAddress()) {
                    $jobLocationTemp['address']['streetAddress'] = $jobLocation->getStreetAddress();
                }

                if ('' !== $jobLocation->getAddressLocality()) {
                    $jobLocationTemp['address']['addressLocality'] = $jobLocation->getAddressLocality();
                }

                if ('' !== $jobLocation->getPostalCode()) {
                    $jobLocationTemp['address']['postalCode'] = $jobLocation->getPostalCode();
                }

                if ('' !== $jobLocation->getAddressRegion()) {
                    $jobLocationTemp['address']['addressRegion'] = $jobLocation->getAddressRegion();
                }

                if ('' !== $jobLocation->getAddressCountry()) {
                    $jobLocationTemp['address']['addressCountry'] = $jobLocation->getAddressCountry();
                }

                $structuredDataTemp[] = $jobLocationTemp;
            }
        }

        if (1 === \count($structuredDataTemp)) {
            $structuredData['jobLocation'] = $structuredDataTemp[0];
        } elseif (1 < \count($structuredDataTemp)) {
            $structuredData['jobLocation'] = $structuredDataTemp;
        }

        if ($jobOffer->isRemote()) {
            $structuredData['jobLocationType'] = 'TELECOMMUTE';

            if ($jobOffer->isHasLocationRequirements()) {
                $requirements = StringUtil::deserialize($jobOffer->getApplicantLocationRequirements());
                $structuredDataTemp = [];

                if (\is_array($requirements)) {
                    foreach ($requirements as $requirement) {
                        $structuredDataTemp[] = [
                            '@type' => $requirement['key'],
                            'name' => $requirement['value'],
                        ];
                    }
                }

                if (!empty($structuredDataTemp)) {
                    $structuredData['applicantLocationRequirements'] = $structuredDataTemp;
                }
            }
        }

        return $structuredData;
    }

    public function checkPrerequisites(?TlManiaxContaoJobsOffer $jobsOffer): bool
    {
        if (null === $jobsOffer) {
            return false;
        }

        return true;
    }

    public function sanitizeDescription(?string $description): ?string
    {
        if (null === $description) {
            return null;
        }

        $description = strip_tags($description, '<br><p><ol><ul><li><h1><h2><h3><h4><h5><strong><em>');
        $description = StringUtil::stripInsertTags($description);
        $description = StringUtil::restoreBasicEntities($description);

        return $description;
    }

    public function generateSalary(TlManiaxContaoJobsOffer $jobOffer, array $structuredData)
    {
        $numberHelper = new NumberHelper($jobOffer->getSalaryCurrency(), 'en');

        if ($jobOffer->isAddSalary()) {
            $structuredDataTemp = [
                '@type' => 'MonetaryAmount',
                'currency' => $jobOffer->getSalaryCurrency(),
                'value' => [
                    '@type' => 'QuantitativeValue',
                    'unitText' => $jobOffer->getSalaryUnit(),
                ],
            ];

            if ($jobOffer->getSalaryMaxValue() > 0 && $jobOffer->getSalaryValue() > 0) {
                $structuredDataTemp['value']['minValue'] = $numberHelper->formatNumberFromDbForDCAField((string) $jobOffer->getSalaryValue());
                $structuredDataTemp['value']['maxValue'] = $numberHelper->formatNumberFromDbForDCAField((string) $jobOffer->getSalaryMaxValue());
            } else {
                $structuredDataTemp['value']['value'] = $numberHelper->formatNumberFromDbForDCAField((string) max($jobOffer->getSalaryMaxValue(), $jobOffer->getSalaryValue()));
            }

            $structuredData['baseSalary'] = $structuredDataTemp;
        }

        return $structuredData;
    }
}
