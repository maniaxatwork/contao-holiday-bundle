<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoPortfolio\EventListener\Contao;

use Contao\CoreBundle\Event\MenuEvent;
use Maniax\ContaoPortfolio\Controller\Contao\BackendModule\SettingsController;
use Maniax\ContaoPortfolio\Helper\PermissionsHelper;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\RouterInterface;

class BackendMenuListener
{
    protected $router;
    protected $requestStack;

    public function __construct(RouterInterface $router, RequestStack $requestStack)
    {
        $this->router = $router;
        $this->requestStack = $requestStack;
    }

    public function __invoke(MenuEvent $event): void
    {
        $factory = $event->getFactory();
        $tree = $event->getTree();

        if ('mainMenu' !== $tree->getName()) {
            return;
        }

        $contentNode = $tree->getChild('maniax_contao_portfolio');

        if (PermissionsHelper::canAccessModule('settings')) {
            $node = $factory
                ->createItem('maniax-contao-portfolio-settings')
                ->setUri($this->router->generate(SettingsController::class))
                ->setLabel($GLOBALS['TL_LANG']['MOD']['maniax_contao_portfolio_settings'][0])
                ->setLinkAttribute('title', $GLOBALS['TL_LANG']['MOD']['maniax_contao_portfolio_settings'][1])
                ->setLinkAttribute('class', 'maniax-contao-portfolio-settings')
                ->setCurrent($this->requestStack->getCurrentRequest()->get('_controller') === SettingsController::class.'::showSettings' || SettingsController::isActive($this->requestStack))
            ;

            $contentNode->addChild($node);
        }
    }
}
