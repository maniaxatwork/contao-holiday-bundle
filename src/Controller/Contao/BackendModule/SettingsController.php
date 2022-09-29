<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoJobs\Controller\Contao\BackendModule;

use Contao\CoreBundle\Controller\AbstractController;
use Contao\CoreBundle\Exception\AccessDeniedException;
use Contao\CoreBundle\Util\PackageUtil;
use Contao\System;
use Maniax\ContaoJobs\Helper\PermissionsHelper;
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
            throw new AccessDeniedException('The settings module of the maniax-at-work.de Jobs Bundle is not allowed for user "'.BackendUser::getInstance()->username.'".');
        }

        System::loadLanguageFile('modules');

        $GLOBALS['TL_CSS'][] = 'bundles/maniaxcontaojobs/dashboard.min.css';

        $mods = [];

        foreach ($GLOBALS['BE_MOD']['maniax_contao_jobs'] as $key => $mod) {
            if (isset($mod['hideInNavigation']) && $mod['hideInNavigation']) {
                if (!PermissionsHelper::canAccessModule($key, 'modules')) {
                    continue;
                }
                $mod['title'] = $GLOBALS['TL_LANG']['MOD'][$key];
                $mods[$key] = $mod;
            }
        }

        return new Response($this->twig->render(
            '@ManiaxContaoJobs/be_maniax_contao_jobs_settings.html.twig',
            [
                'title' => $GLOBALS['TL_LANG']['MOD']['maniax_contao_jobs_settings'][0],
                'mods' => $mods,
                'version' => PackageUtil::getVersion('maniaxatwork/contao-jobs-bundle'),
            ]
        ));
    }

    public static function isActive(RequestStack $requestStack)
    {
        $do = $requestStack->getCurrentRequest()->get('do');
        if (isset($GLOBALS['BE_MOD']['maniax_contao_jobs'][$do], $GLOBALS['BE_MOD']['maniax_contao_jobs'][$do]['hideInNavigation']) && $GLOBALS['BE_MOD']['maniax_contao_jobs'][$do]['hideInNavigation']) {
            return true;
        }

        return false;
    }
}
