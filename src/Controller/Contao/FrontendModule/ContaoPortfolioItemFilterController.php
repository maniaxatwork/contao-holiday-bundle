<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoPortfolio\Controller\Contao\FrontendModule;

use Contao\Controller;
use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\ServiceAnnotation\FrontendModule;
use Contao\ModuleModel;
use Contao\StringUtil;
use Contao\Template;
use Doctrine\Persistence\ManagerRegistry;
use Haste\Form\Form as HasteForm;
use Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioSubCategory;
use Maniax\ContaoPortfolio\Entity\TlManiaxContaoPortfolioItem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;

/**
 * @FrontendModule("maniax_contao_portfolio_filter",
 *   category="maniaxContaoPortfolio",
 *   template="mod_maniax_contao_portfolio_filter",
 *   renderer="forward"
 * )
 */
class ContaoPortfolioItemFilterController extends AbstractFrontendModuleController
{
    protected ManagerRegistry $registry;
    protected RouterInterface $router;
    protected array $counterSubCategory = [];
    protected array $subCategories = [];
    protected array $portfolioItems = [];

    public function __construct(
        ManagerRegistry $registry,
        RouterInterface $router
    ) {
        $this->registry = $registry;
        $this->router = $router;
    }

    public function getAllItems($model): array
    {
        if (empty($this->portfolioItems)) {
            $portfolioItemRepository = $this->registry->getRepository(TlManiaxContaoPortfolioItem::class);
            $moduleSubCategories = StringUtil::deserialize($model->maniaxContaoPortfolioSubCategories);
            if (!\is_array($moduleSubCategories)) {
                $moduleSubCategories = [];
            }
            $portfolioItems = $portfolioItemRepository->findAllPublishedBySubCategories([], $moduleSubCategories);

            foreach ($portfolioItems as $portfolioItem) {
                $this->collectSubCategories($portfolioItem, $model);
                $this->portfolioItems[] = $portfolioItem;
            }
        }

        return $this->portfolioItems;
    }

    public function collectSubCategories(?TlManiaxContaoPortfolioItem $portfolioItem, $model): void
    {
        $subCategories = StringUtil::deserialize($portfolioItem->getSubCategories());
        $addedSubCategories = [];
        if (\is_array($subCategories)) {
            foreach ($subCategories as $subCategoriesId) {
                /** @var TlManiaxContaoPortfolioSubCategory $subCategory */
                $subCategory = $this->getAllSubCategories($model)[(int) $subCategoryId] ?? null;

                if (null === $subCategory) {
                    continue;
                }

                if (\in_array($subCategory->getTitle(), $addedSubCategories, true)) {
                    continue;
                }

                if (\array_key_exists($subCategory->getTitle(), $this->counterSubCategory)) {
                    ++$this->counterSubCategory[$subCategory->getTitle()];
                } else {
                    $this->counterSubCategory[$subCategory->getTitle()] = 1;
                }

                $addedSubCategories[] = $subCategory->getTitle();
            }
        }
    }

    public function getSubCategories(ModuleModel $model): ?array
    {
        $this->getAllItems($model);

        $options = [];

        foreach ($this->getAllSubCategories($model) as $k) {
            if (!$model->maniaxContaPortfolioShowAllSubCategories) {
                continue;
            }
            if (\array_key_exists($k->getTitle(), $options)) {
                $options[$k->getTitle()] = $options[$k->getTitle()].'|'.$k->getId();
            } else {
                $options[$k->getTitle()] = $k->getId();
            }
        }

        $options = array_flip($options);

        foreach ($options as $key => $option) {
            $options[$key] = $option.$this->addgetSubCategoryCounter($model, $option);
        }

        return $options;
    }

    public function getAllSubCategories($model): array
    {
        if (empty($this->subCategories)) {
            $subCategoriesRepository = $this->registry->getRepository(TlManiaxContaoPortfolioSubCategory::class);
            $moduleSubCategories = StringUtil::deserialize($model->maniaxContaoPortfolioSubCategories);
            if (!\is_array($moduleLocations) || empty($moduleLocations)) {
                $subCategories = $subCategoriesRepository->findAll();
            } else {
                $subCategories = $subCategoriesRepository->findBy(['id' => $moduleSubCategories]);
            }

            foreach ($subCategories as $subCategory) {
                $this->subCategories[$subCategory->getId()] = $subCategory;
            }
        }

        return $this->subCategories;
    }

    public function getHeadlineHtml(string $content, string $type): string
    {
        if (empty($content)) {
            return '';
        }

        $return = '<div class="maniaxContaoPortfolio_filter_widget_headline '.$type.'">';
        $return .= Controller::replaceInsertTags($content);
        $return .= '</div>';

        return $return;
    }

    protected function getResponse(Template $template, ModuleModel $model, Request $request): ?Response
    {
        $form = new HasteForm('maniax_contao_portfolio_filter_'.$model->id, 'GET', fn ($objHaste) => false);

        if (0 !== (int) $model->jumpTo) {
            $form->setFormActionFromPageId($model->jumpTo);
        }

        if ($model->maniaxContaoPortfolioShowSubCategories) {
            $form->addFormField('subCategoryHeadline', [
                'inputType' => 'html',
                'eval' => [
                    'html' => $this->getHeadlineHtml($model->maniaxContaoPortfolioSubCategoriesHeadline, 'subCategory'),
                ],
            ]);

            $form->addFormField('subCategory', [
                'inputType' => 'checkbox',
                'default' => $request->get('subCategory'),
                'options' => $this->getSubCategory($model),
                'eval' => ['multiple' => true],
            ]);
        }

        if ($model->maniaxContaoPortfolioShowButton) {
            $form->addFormField('submit', [
                'label' => $model->maniaxContaoPortfolioSubmit,
                'inputType' => 'submit',
            ]);
        }

        $template->form = $form->generate();
        $template->local = $request->getLocale();
        $template->ajaxRoute = $this->router->getRouteCollection()->get('maniax_contao_portfolio.item_filter')->getPath();

        return $template->getResponse();
    }
}
