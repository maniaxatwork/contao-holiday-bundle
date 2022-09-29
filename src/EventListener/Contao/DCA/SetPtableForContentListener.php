<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoJobs\EventListener\Contao\DCA;

use Contao\CoreBundle\Routing\ScopeMatcher;
use Symfony\Component\HttpFoundation\RequestStack;

class SetPtableForContentListener
{
    private RequestStack $requestStack;
    private ScopeMatcher $scopeMatcher;

    public function __construct(RequestStack $requestStack, ScopeMatcher $scopeMatcher)
    {
        $this->requestStack = $requestStack;
        $this->scopeMatcher = $scopeMatcher;
    }

    public function setPtableForContentListener(string $table): void
    {
        // We only want to adjust the DCA of tl_content
        if ('tl_content' !== $table) {
            return;
        }

        $request = $this->requestStack->getCurrentRequest();

        // Check if this is a back end request
        if (null === $request || !$this->scopeMatcher->isBackendRequest($request)) {
            return;
        }

        if ('maniax_contao_jobs_offers' === $request->query->get('do')) {
            $GLOBALS['TL_DCA']['tl_content']['config']['ptable'] = 'tl_maniax_contao_jobs_offer';
        }
    }
}
