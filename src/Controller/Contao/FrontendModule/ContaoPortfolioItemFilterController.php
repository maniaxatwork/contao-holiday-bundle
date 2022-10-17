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
    protected array $counterCategory = [];
    protected array $categories = [];
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
            $moduleCategories = StringUtil::deserialize($model->maniaxContaoPortfolioCategories);
            if (!\is_array($moduleCategories)) {
                $moduleCategories = [];
            }
            $portfolioItems = $portfolioItemRepository->findAllPublishedByCategories([], $moduleCategories);

            foreach ($portfolioItems as $portfolioItem) {
                $this->collectCategories($portfolioItem, $model);
                $this->portfolioItems[] = $portfolioItem;
            }
        }

        return $this->portfolioItems;
    }

    public function collectCategories(?TlManiaxContaoPortfolioItem $portfolioItem, $model): void
    {
        $categories = StringUtil::deserialize($portfolioItem->getCategories());
        $addedCategories = [];
        if (\is_array($categories)) {
            foreach ($categories as $categoriesId) {
                /** @var TlManiaxContaoPortfolioCategory $category */
                $category = $this->getAllCategories($model)[(int) $categoryId] ?? null;

                if (null === $category) {
                    continue;
                }

                if (\in_array($category->getTitle(), $addedCategories, true)) {
                    continue;
                }

                if (\array_key_exists($category->getTitle(), $this->counterCategory)) {
                    ++$this->counterCategory[$category->getTitle()];
                } else {
                    $this->counterCategory[$category->getTitle()] = 1;
                }

                $addedCategories[] = $category->getTitle();
            }
        }
    }

    public function getCategories(ModuleModel $model): ?array
    {
        $this->getAllItems($model);

        $options = [];

        foreach ($this->getAllCategories($model) as $k) {
            if (!$model->maniaxContaPortfolioShowAllCategories) {
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
            $options[$key] = $option.$this->addgetCategoryCounter($model, $option);
        }

        return $options;
    }

    public function getAllCategories($model): array
    {
        if (empty($this->categories)) {
            $categoriesRepository = $this->registry->getRepository(TlManiaxContaoPortfolioCategory::class);
            $moduleCategories = StringUtil::deserialize($model->maniaxContaoPortfolioCategories);

            $categories = $categoriesRepository->findAll();

            foreach ($categories as $category) {
                $this->categories[$category->getId()] = $category;
            }
        }

        return $this->categories;
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

        if ($model->maniaxContaoPortfolioShowCategories) {
            $form->addFormField('categoryHeadline', [
                'inputType' => 'html',
                'eval' => [
                    'html' => $this->getHeadlineHtml($model->maniaxContaoPortfolioCategoriesHeadline, 'category'),
                ],
            ]);

            $form->addFormField('category', [
                'inputType' => 'checkbox',
                'default' => $request->get('category'),
                'options' => $this->getCategory($model),
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
