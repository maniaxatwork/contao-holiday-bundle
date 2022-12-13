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
use Maniax\ContaoHoliday\Entity\TlManiaxContaoHolidayLocation as TlManiaxContaoHolidayLocationEntity;
use Maniax\ContaoHoliday\Entity\TlManiaxContaoHolidayItem as TlManiaxContaoHolidayItemEntity;
use Symfony\Component\HttpFoundation\RequestStack;
use Twig\Environment as TwigEnvironment;

class TlManiaxContaoHolidayItem
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
            $return[$doc->getId()] = $doc->getName() .' | '. $doc->getStreet() .', '. $doc->getLocality();
        }

        return $return;
    }

    public function onLocationOptionsCallback(): array
    {
        $locRepository = $this->registry->getRepository(TlManiaxContaoHolidayLocationEntity::class);

        $locs = $locRepository->findAllPublished();

        $return = [];
        foreach ($locs as $loc) {
            $return[$loc->getId()] = $loc->getStreet() .', '. $loc->getLocality();
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
            $itemRepository = $this->registry->getRepository(TlManiaxContaoHolidayItemEntity::class);
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

        $label = '<strong>'.$labelArr[0] .' - '.$labelArr[1] .'</strong>: ' .date('d.m.Y', (int) $labelArr[2]). ' - '.date('d.m.Y', (int) $labelArr[3]) . " | angezeigt ab: ". date('d.m.Y', (int) $labelArr[4]);

        return $label;
    }
}
