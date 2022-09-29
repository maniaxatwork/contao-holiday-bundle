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

use Contao\Config;
use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\ServiceAnnotation\FrontendModule;
use Contao\Environment;
use Contao\FrontendTemplate;
use Contao\ModuleModel;
use Contao\PageModel;
use Contao\StringUtil;
use Contao\System;
use Contao\Template;
use Doctrine\Persistence\ManagerRegistry;
use Haste\Form\Form;
use Maniax\ContaoJobs\Entity\TlManiaxJobsBasicJobLocation;
use Maniax\ContaoJobs\Entity\TlManiaxJobsBasicOffer;
use Maniax\ContaoJobs\Helper\MetaFieldsHelper;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @FrontendModule("maniax_contao_jobs_offer_list",
 *   category="maniaxContaoJobs",
 *   template="mod_maniax_contao_jobs_offer_list",
 *   renderer="forward"
 * )
 */
class ContaoJobOfferListController extends AbstractFrontendModuleController
{
    protected ManagerRegistry $registry;

    protected MetaFieldsHelper $metaFieldsHelper;

    protected TranslatorInterface $translator;

    public function __construct(
        ManagerRegistry $registry,
        MetaFieldsHelper $metaFieldsHelper,
        TranslatorInterface $translator
    ) {
        $this->registry = $registry;
        $this->metaFieldsHelper = $metaFieldsHelper;
        $this->translator = $translator;
    }

    public function generateJobOfferUrl(TlManiaxContaoJobsOffer $jobOffer, ModuleModel $model): string
    {
        $objPage = $model->getRelated('jumpTo');

        if (!$objPage instanceof PageModel) {
            $url = ampersand(Environment::get('request'));
        } else {
            $params = (Config::get('useAutoItem') ? '/' : '/items/').($this->metaFieldsHelper->getMetaFields($jobOffer)['alias'] ?: $jobOffer->getId());

            $url = ampersand($objPage->getFrontendUrl($params));
        }

        return $url;
    }

    /**
     * @param Template    $template
     * @param ModuleModel $model
     * @param Request     $request
     *
     * @return Response|null
     */
    protected function getResponse(Template $template, ModuleModel $model, Request $request): ?Response
    {
        $jobOfferRepository = $this->registry->getRepository(TlManiaxContaoJobsOffer::class);
        $jobLocationRepository = $this->registry->getRepository(TlManiaxContaoJobsJobLocation::class);

        $moduleLocations = StringUtil::deserialize($model->maniaxContaoJobsLocations);
        if (!\is_array($moduleLocations)) {
            $moduleLocations = [];
        }

        $types = \is_array($request->get('types')) && !$model->maniaxContaoJobsNoFilter ? $request->get('types') : [];
        $locations = \is_array($request->get('location')) && !$model->maniaxContaoJobsNoFilter ? $request->get('location') : $moduleLocations;

        if (!empty($moduleLocations)) {
            $locations = array_filter($locations, static fn ($element) => \in_array($element, $moduleLocations, true));
            if (empty($locations)) {
                $locations = $moduleLocations;
            }
        }

        $sortByLocation = null;
        $sortBy = $request->get('sortBy') ?? $model->maniaxContaoJobsSortingDefaultField;
        $order = $request->get('order') ?? $model->maniaxContaoJobsSortingDefaultDirection;

        if ($model->plentaJobsBasicShowSorting) {
            System::loadLanguageFile('tl_module');

            $formId = 'maniax_Contao_jobs_sorting_'.$model->id;
            $default = $sortBy.'__'.$order;

            $fields = StringUtil::deserialize($model->maniaxContaoJobsSortingFields);
            $options = [];

            foreach ($fields as $field) {
                $options[] = $field.'__ASC';
                $options[] = $field.'__DESC';
            }

            $form = new Form($formId, 'POST', fn ($objHaste) => false);
            $form->addFormField('sort', [
                'inputType' => 'select',
                'default' => $default,
                'options' => $options,
                'reference' => &$GLOBALS['TL_LANG']['tl_module']['maniaxContaoJobsSortingFields']['fields'],
            ]);

            $template->sortingForm = $form->generate();
            $template->showSorting = true;
            $template->formId = $formId;

            if ('jobLocation' === $sortBy) {
                $sortByLocation = $order;
                $sortBy = null;
                $order = null;
            }
        } else {
            $sortBy = null;
            $order = null;
        }

        $jobOffers = $jobOfferRepository->findAllPublishedByTypesAndLocation($types, $locations, $sortBy, $order);

        if (null !== $sortByLocation) {
            $itemParts = [];
            if (empty($locations)) {
                $locations[] = 'remote';
                foreach ($jobLocationRepository->findAll() as $location) {
                    $locations[] = (string) $location->getId();
                }
            }
            $locationArr = 'DESC' === $sortByLocation ? array_reverse($locations) : $locations;
            foreach ($locationArr as $location) {
                $joinedLocations = explode('|', $location);
                foreach ($joinedLocations as $joinedLocation) {
                    $itemParts[(string) $joinedLocation] = [];
                }
            }
        }

        $items = [];

        foreach ($jobOffers as $jobOffer) {
            $itemTemplate = new FrontendTemplate('maniax_contao_jobs_offer_default');
            $itemTemplate->jobOffer = $jobOffer;
            $itemTemplate->jobOfferMeta = $this->metaFieldsHelper->getMetaFields($jobOffer);
            $itemTemplate->headlineUnit = $model->maniaxContaoJobsHeadlineTag;

            $itemTemplate->link = $this->generateJobOfferUrl($jobOffer, $model);

            if (null !== $sortByLocation) {
                $jobLocations = StringUtil::deserialize($jobOffer->getJobLocation());

                foreach ($locationArr as $location) {
                    $joinedLocations = explode('|', $location);
                    foreach ($joinedLocations as $joinedLocation) {
                        if (('remote' === $joinedLocation && $jobOffer->isRemote()) || \in_array((string) $joinedLocation, $jobLocations, true)) {
                            $itemParts[$location][] = $itemTemplate->parse();
                            break 2;
                        }
                    }
                }
            } else {
                $items[] = $itemTemplate->parse();
            }
        }

        if (null !== $sortByLocation) {
            foreach ($itemParts as $part) {
                $items = array_merge($items, $part);
            }
        }

        $template->attributes = 'data-id="'.$model->id.'"';

        $template->empty = $this->translator->trans('MSC.MANIAX_CONTAO_JOBS.emptyList', [], 'contao_default');

        $template->items = $items;

        return $template->getResponse();
    }
}
