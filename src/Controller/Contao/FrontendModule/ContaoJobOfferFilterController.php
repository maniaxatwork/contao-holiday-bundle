<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoJobs\Controller\Contao\FrontendModule;

use Contao\Controller;
use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\ServiceAnnotation\FrontendModule;
use Contao\ModuleModel;
use Contao\StringUtil;
use Contao\Template;
use Doctrine\Persistence\ManagerRegistry;
use Haste\Form\Form as HasteForm;
use Maniax\ContaoJobs\Entity\TlManiaxContaoJobsJobLocation;
use Maniax\ContaoJobs\Entity\TlManiaxContaoJobsOffer;
use Maniax\ContaoJobs\Helper\EmploymentType;
use Maniax\ContaoJobs\Helper\MetaFieldsHelper;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;

/**
 * @FrontendModule("maniax_contao_jobs_filter",
 *   category="maniaxContaoJobs",
 *   template="mod_maniax_contao_jobs_filter",
 *   renderer="forward"
 * )
 */
class ContaoJobOfferFilterController extends AbstractFrontendModuleController
{
    protected ManagerRegistry $registry;
    protected MetaFieldsHelper $metaFieldsHelper;
    protected EmploymentType $employmentTypeHelper;
    protected RouterInterface $router;
    protected array $counterEmploymentType = [];
    protected array $counterLocation = [];
    protected array $locations = [];
    protected array $offers = [];

    public function __construct(
        ManagerRegistry $registry,
        MetaFieldsHelper $metaFieldsHelper,
        EmploymentType $employmentTypeHelper,
        RouterInterface $router
    ) {
        $this->registry = $registry;
        $this->metaFieldsHelper = $metaFieldsHelper;
        $this->employmentTypeHelper = $employmentTypeHelper;
        $this->router = $router;
    }

    public function getTypes(ModuleModel $model): ?array
    {
        $options = [];
        $employmentTypes = [];
        $employmentTypeHelper = $this->employmentTypeHelper;
        $this->getAllOffers($model);

        foreach ($employmentTypeHelper->getEmploymentTypes() as $employmentType) {
            $employmentTypes[$employmentType] = $employmentTypeHelper->getEmploymentTypeName($employmentType);
        }

        if (array_is_assoc($employmentTypes)) {
            foreach ($employmentTypes as $k => $v) {
                if (true !== (bool) $model->maniaxContaoJobsShowAllTypes) {
                    if (!\array_key_exists($k, $this->counterEmploymentType)) {
                        continue;
                    }
                }

                $options[$k] = $v.$this->addItemCounter($model, $k);
            }
        }

        return $options;
    }

    public function addItemCounter(ModuleModel $model, string $key): string
    {
        if (true === (bool) $model->maniaxContaoJobsShowQuantity &&
            \array_key_exists($key, $this->counterEmploymentType)
        ) {
            return '<span class="item-counter">['.$this->counterEmploymentType[$key].']</span>';
        }

        return '';
    }

    public function addLocationCounter(ModuleModel $model, string $key): string
    {
        if (true === (bool) $model->maniaxContaoJobsShowLocationQuantity && \array_key_exists($key, $this->counterLocation)) {
            return '<span class="item-counter">['.$this->counterLocation[$key].']</span>';
        }

        return '';
    }

    public function getAllOffers($model): array
    {
        if (empty($this->offers)) {
            $jobOfferRepository = $this->registry->getRepository(TlManiaxContaoJobsOffer::class);
            $moduleLocations = StringUtil::deserialize($model->maniaxContaoJobsLocations);
            if (!\is_array($moduleLocations)) {
                $moduleLocations = [];
            }
            $jobOffers = $jobOfferRepository->findAllPublishedByTypesAndLocation([], $moduleLocations);

            foreach ($jobOffers as $jobOffer) {
                $this->collectEmploymenttypes($jobOffer->getEmploymentType());
                $this->collectLocations($jobOffer, $model);
                $this->offers[] = $jobOffer;
            }
        }

        return $this->offers;
    }

    public function collectEmploymenttypes(?array $employmentTypes): void
    {
        if (\is_array($employmentTypes)) {
            foreach ($employmentTypes as $employmentType) {
                if (\array_key_exists($employmentType, $this->counterEmploymentType)) {
                    $this->counterEmploymentType[$employmentType] = ++$this->counterEmploymentType[$employmentType];
                } else {
                    $this->counterEmploymentType[$employmentType] = 1;
                }
            }
        }
    }

    public function collectLocations(?TlManiaxContaoJobsOffer $jobOffer, $model): void
    {
        $locations = StringUtil::deserialize($jobOffer->getJobLocation());
        $addedLocations = [];
        if (\is_array($locations) && (!$jobOffer->isRemote() || !$jobOffer->isOnlyRemote())) {
            foreach ($locations as $locationId) {
                /** @var TlManiaxContaoJobsJobLocation $location */
                $location = $this->getAllLocations($model)[(int) $locationId] ?? null;

                if (null === $location) {
                    continue;
                }

                if (\in_array($location->getAddressLocality(), $addedLocations, true)) {
                    continue;
                }

                if (\array_key_exists($location->getAddressLocality(), $this->counterLocation)) {
                    ++$this->counterLocation[$location->getAddressLocality()];
                } else {
                    $this->counterLocation[$location->getAddressLocality()] = 1;
                }

                $addedLocations[] = $location->getAddressLocality();
            }
        }

        if ($jobOffer->isRemote()) {
            if (\array_key_exists($GLOBALS['TL_LANG']['MSC']['MANIAX_CONTAO_JOBS']['remote'], $this->counterLocation)) {
                ++$this->counterLocation[$GLOBALS['TL_LANG']['MSC']['MANIAX_CONTAO_JOBS']['remote']];
            } else {
                $this->counterLocation[$GLOBALS['TL_LANG']['MSC']['MANIAX_CONTAO_JOBS']['remote']] = 1;
            }
        }
    }

    public function getLocations(ModuleModel $model): ?array
    {
        $this->getAllOffers($model);

        $options = [];

        foreach ($this->getAllLocations($model) as $k) {
            if (!$model->maniaxContaoJobsShowAllLocations && !\array_key_exists('remote' === $k ? $GLOBALS['TL_LANG']['MSC']['MANIAX_CONTAO_JOBS']['remote'] : $k->getAddressLocality(), $this->counterLocation)) {
                continue;
            }
            if ('remote' === $k) {
                $options[$GLOBALS['TL_LANG']['MSC']['MANIAX_CONTAO_JOBS']['remote']] = $k;
            } elseif (\array_key_exists($k->getAddressLocality(), $options)) {
                $options[$k->getAddressLocality()] = $options[$k->getAddressLocality()].'|'.$k->getId();
            } else {
                $options[$k->getAddressLocality()] = $k->getId();
            }
        }

        $options = array_flip($options);

        foreach ($options as $key => $option) {
            $options[$key] = $option.$this->addLocationCounter($model, $option);
        }

        return $options;
    }

    public function getAllLocations($model): array
    {
        if (empty($this->locations)) {
            $locationsRepository = $this->registry->getRepository(TlManiaxContaoJobsJobLocation::class);
            $moduleLocations = StringUtil::deserialize($model->maniaxContaoJobsLocations);
            if (!\is_array($moduleLocations) || empty($moduleLocations)) {
                $locations = $locationsRepository->findAll();
            } else {
                $locations = $locationsRepository->findBy(['id' => $moduleLocations]);
                if (\in_array('remote', $moduleLocations, true)) {
                    $this->locations['remote'] = 'remote';
                }
            }

            foreach ($locations as $location) {
                $this->locations[$location->getId()] = $location;
            }
        }

        return $this->locations;
    }

    public function getHeadlineHtml(string $content, string $type): string
    {
        if (empty($content)) {
            return '';
        }

        $return = '<div class="maniaxContaoJobs_filter_widget_headline '.$type.'">';
        $return .= Controller::replaceInsertTags($content);
        $return .= '</div>';

        return $return;
    }

    protected function getResponse(Template $template, ModuleModel $model, Request $request): ?Response
    {
        $form = new HasteForm('maniax_contao_jobs_filter_'.$model->id, 'GET', fn ($objHaste) => false);

        if (0 !== (int) $model->jumpTo) {
            $form->setFormActionFromPageId($model->jumpTo);
        }

        if ($model->maniaxContaoJobsShowTypes) {
            $form->addFormField('typesHeadline', [
                'inputType' => 'html',
                'eval' => [
                    'html' => $this->getHeadlineHtml($model->maniaxContaoJobsTypesHeadline, 'jobTypes'),
                ],
            ]);

            $form->addFormField('types', [
                'inputType' => 'checkbox',
                'default' => $request->get('types'),
                'options' => $this->getTypes($model),
                'eval' => ['multiple' => true],
            ]);
        }

        if ($model->maniaxContaoJobsShowLocations) {
            $form->addFormField('locationHeadline', [
                'inputType' => 'html',
                'eval' => [
                    'html' => $this->getHeadlineHtml($model->maniaxContaoJobsLocationsHeadline, 'jobLocation'),
                ],
            ]);

            $form->addFormField('location', [
                'inputType' => 'checkbox',
                'default' => $request->get('location'),
                'options' => $this->getLocations($model),
                'eval' => ['multiple' => true],
            ]);
        }

        if ($model->maniaxContaoJobsShowButton) {
            $form->addFormField('submit', [
                'label' => $model->maniaxContaoJobsSubmit,
                'inputType' => 'submit',
            ]);
        }

        $template->form = $form->generate();
        $template->local = $request->getLocale();
        $template->ajaxRoute = $this->router->getRouteCollection()->get('maniax_contao_jobs.offer_filter')->getPath();

        return $template->getResponse();
    }
}
