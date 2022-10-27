<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Holiday Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoHoliday\EventListener\Contao\DCA;

use Composer\InstalledVersions;
use Contao\CoreBundle\Slug\Slug;
use Contao\CoreBundle\Util\PackageUtil;
use Contao\DataContainer;
use Contao\Input;
use Contao\Message;
use Contao\StringUtil;
use Contao\System;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Maniax\ContaoHoliday\Entity\TlManiaxContaoHolidayDoc as TlManiaxContaoHolidayDocEntity;
use Maniax\ContaoHoliday\Entity\TlManiaxContaoHoliday as TlManiaxContaoHolidayEntity;
use Symfony\Component\HttpFoundation\RequestStack;
use Twig\Environment as TwigEnvironment;

class TlManiaxContaoHoliday
{
    protected ManagerRegistry $registry;

    protected Slug $slugGenerator;

    protected RequestStack $requestStack;

    protected TwigEnvironment $twig;

    public function __construct(
        ManagerRegistry $registry,
        Slug $slugGenerator,
        RequestStack $requestStack,
        TwigEnvironment $twig
    ) {
        $this->registry = $registry;
        $this->slugGenerator = $slugGenerator;
        $this->requestStack = $requestStack;
        $this->twig = $twig;
    }

    public function onDocOptionsCallback(): array
    {
        $docRepository = $this->registry->getRepository(TlManiaxContaoHolidayDocEntity::class);

        $docs = $docRepository->findAllPublished();

        $return = [];
        foreach ($docs as $doc) {

            if (0 !== $doc->getPid()) {
                $mainDocRepository = $this->registry->getRepository(TlManiaxContaoHolidayDocEntity::class);
                $mainDoc = $mainDocRepository->find($doc->getPid());

                $return[$doc->getId()] = $mainDoc->getTitle() .': '.$doc->getTitle();
            }else{
                $return[$doc->getId()] = $doc->getTitle();
            }
        }

        return $return;
    }

    public function saveCallbackGlobal(DataContainer $dc): void
    {
        // Front end call
        if (!$dc instanceof DataContainer) {
            return;
        }

        if (!$dc->activeRecord) {
            return;
        }

        if (!empty(Input::post('published'))) {
            $itemRepository = $this->registry->getRepository(TlManiaxContaoHolidayEntity::class);
            $item = $itemRepository->find($dc->activeRecord->id);
            $this->registry->getManager()->persist($item);
            $this->registry->getManager()->flush();
        }
    }

    public function onShowInfoCallback(DataContainer $dc = null): void
    {
        $GLOBALS['TL_CSS'][] = 'bundles/maniaxcontaoholiday/dashboard.min.css';
        $info = $this->twig->render('@ManiaxContaoHoliday/be_maniax_info.html.twig', [
            'version' => PackageUtil::getVersion('maniaxatwork/contao-holiday-bundle'),
        ]);

        Message::addRaw($info);
    }

    public function onLabelCallback(array $row, $label, DataContainer $dc, $attributes): string
    {
        $labelArr = explode('|', $label);

        $docRepository = $this->registry->getRepository(TlManiaxContaoHolidayDocEntity::class);
        $doc = $docRepository->find((int) $labelArr[0]);

        if (0 !== $doc->getPid()) {
            $mainDocRepository = $this->registry->getRepository(TlManiaxContaoHolidayDocEntity::class);
            $mainDoc = $mainDocRepository->find($doc->getPid());

            $label = '<strong>'.$labelArr[1] .'</strong>: <small>' .$mainDoc->getTitle(). ' -> ' .$doc->getTitle(). '</small>';
        }else{
            $label = '<strong>'.$labelArr[1] .'</strong>: <small>' .$doc->getTitle(). '</small>';
        }

        return $label;
    }
}
