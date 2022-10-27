<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Holiday Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoHoliday\Controller\Contao\BackendModule;

use Contao\CoreBundle\Controller\AbstractController;
use Contao\CoreBundle\Exception\AccessDeniedException;
use Contao\CoreBundle\Util\PackageUtil;
use Contao\System;
use Maniax\ContaoHoliday\Helper\PermissionsHelper;
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
            throw new AccessDeniedException('The settings module of the maniax-at-work.de Holiday Bundle is not allowed for user "'.BackendUser::getInstance()->username.'".');
        }

        System::loadLanguageFile('modules');

        $GLOBALS['TL_CSS'][] = 'bundles/maniaxcontaoholiday/dashboard.min.css';

        $mods = [];

        foreach ($GLOBALS['BE_MOD']['maniax_contao_holiday'] as $key => $mod) {
            if (isset($mod['hideInNavigation']) && $mod['hideInNavigation']) {
                if (!PermissionsHelper::canAccessModule($key, 'modules')) {
                    continue;
                }
                $mod['title'] = $GLOBALS['TL_LANG']['MOD'][$key];
                $mods[$key] = $mod;
            }
        }

        return new Response($this->twig->render(
            '@ManiaxContaoHoliday/be_maniax_contao_holiday_settings.html.twig',
            [
                'title' => $GLOBALS['TL_LANG']['MOD']['maniax_contao_holiday_settings'][0],
                'mods' => $mods,
                'version' => PackageUtil::getVersion('maniaxatwork/contao-holiday-bundle'),
            ]
        ));
    }

    public static function isActive(RequestStack $requestStack)
    {
        $do = $requestStack->getCurrentRequest()->get('do');
        if (isset($GLOBALS['BE_MOD']['maniax_contao_holiday'][$do], $GLOBALS['BE_MOD']['maniax_contao_holiday'][$do]['hideInNavigation']) && $GLOBALS['BE_MOD']['maniax_contao_holiday'][$do]['hideInNavigation']) {
            return true;
        }

        return false;
    }
}
