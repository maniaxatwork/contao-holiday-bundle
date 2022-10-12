<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoPortfolio\Controller\Contao\BackendModule;

use Contao\CoreBundle\Controller\AbstractController;
use Contao\CoreBundle\Exception\AccessDeniedException;
use Contao\CoreBundle\Util\PackageUtil;
use Contao\System;
use Maniax\ContaoPortfolio\Helper\PermissionsHelper;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment as TwigEnvironment;

class SettingsController extends AbstractController
{
    private $twig;

    public function __construct(TwigEnvironment $twig)
    {
        $this->twig = $twig;
    }

    public function showSettings(): Response
    {
        if (!PermissionsHelper::canAccessModule('settings')) {
            throw new AccessDeniedException('The settings module of the maniax-at-work.de Portfolio Bundle is not allowed for user "'.BackendUser::getInstance()->username.'".');
        }

        System::loadLanguageFile('modules');

        $GLOBALS['TL_CSS'][] = 'bundles/maniaxcontaoportfolio/dashboard.min.css';

        $mods = [];

        foreach ($GLOBALS['BE_MOD']['maniax_contao_portfolio'] as $key => $mod) {
            if (isset($mod['hideInNavigation']) && $mod['hideInNavigation']) {
                if (!PermissionsHelper::canAccessModule($key, 'modules')) {
                    continue;
                }
                $mod['title'] = $GLOBALS['TL_LANG']['MOD'][$key];
                $mods[$key] = $mod;
            }
        }

        return new Response($this->twig->render(
            '@ManiaxContaoPortfolio/be_maniax_contao_portfolio_settings.html.twig',
            [
                'title' => $GLOBALS['TL_LANG']['MOD']['maniax_contao_portfolio_settings'][0],
                'mods' => $mods,
                'version' => PackageUtil::getVersion('maniaxatwork/contao-portfolio-bundle'),
            ]
        ));
    }

    public static function isActive(RequestStack $requestStack)
    {
        $do = $requestStack->getCurrentRequest()->get('do');
        if (isset($GLOBALS['BE_MOD']['maniax_contao_portfolio'][$do], $GLOBALS['BE_MOD']['maniax_contao_portfolio'][$do]['hideInNavigation']) && $GLOBALS['BE_MOD']['maniax_contao_portfolio'][$do]['hideInNavigation']) {
            return true;
        }

        return false;
    }
}
