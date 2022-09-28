<?php

declare(strict_types=1);

/*
 * This file is part of contao-jobs-bundle.
 *
 * (c) Stephan Buder 2022 <stephan@maniax-at-work.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/maniaxatwork/contao-jobs-bundle
 */

namespace ManiaxAtWork\ContaoJobsBundle\Controller\Contao\BackendModule;

use Contao\System;
use Contao\BackendUser;
use Contao\CoreBundle\Util\PackageUtil;
use Twig\Environment as TwigEnvironment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use Contao\CoreBundle\Controller\AbstractController;
use Contao\CoreBundle\Exception\AccessDeniedException;
use ManiaxAtWork\ContaoJobsBundle\Helper\PermissionsHelper;

class SettingsController extends AbstractController
{
    private $twig;

    public function __construct(TwigEnvironment $twig)
    {
        $this->twig = $twig;
    }

    public function showSettings(): Response
    {
        if (!PermissionsHelper::canAccessModule('jobs')) {
            throw new AccessDeniedException('The jobs module of the maniax-at-work Jobs Bundle is not allowed for user "'.BackendUser::getInstance()->username.'".');
        }

        System::loadLanguageFile('modules');

        $GLOBALS['TL_CSS'][] = 'bundles/contaojobs/dashboard.css';

        $mods = [];

        foreach ($GLOBALS['BE_MOD']['contao_jobs'] as $key => $mod) {
            if (isset($mod['hideInNavigation']) && $mod['hideInNavigation']) {
                if (!PermissionsHelper::canAccessModule($key, 'modules')) {
                    continue;
                }
                $mod['title'] = $GLOBALS['TL_LANG']['MOD'][$key];
                $mods[$key] = $mod;
            }
        }

        return new Response($this->twig->render(
            '@ContaoJobs/be_contao_jobs_settings.html.twig',
            [
                'title' => $GLOBALS['TL_LANG']['MOD']['contao_jobs_settings'][0],
                'mods' => $mods,
                'version' => PackageUtil::getVersion('maniaxatwork/contao-jobs-bundle'),
            ]
        ));
    }

    public static function isActive(RequestStack $requestStack)
    {
        $do = $requestStack->getCurrentRequest()->get('do');
        if (isset($GLOBALS['BE_MOD']['contao_jobs'][$do], $GLOBALS['BE_MOD']['contao_jobs'][$do]['hideInNavigation']) && $GLOBALS['BE_MOD']['contao_jobs'][$do]['hideInNavigation']) {
            return true;
        }

        return false;
    }
}
