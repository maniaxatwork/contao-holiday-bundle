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

use Contao\CoreBundle\Slug\Slug;
use Contao\DataContainer;
use Contao\Input;
use Contao\StringUtil;
use Doctrine\Persistence\ManagerRegistry;
use Contao\CoreBundle\ServiceAnnotation\Callback;
use Exception;
use Maniax\ContaoHoliday\Entity\TlManiaxContaoHolidayDoc;
use Maniax\ContaoHoliday\Entity\TlManiaxContaoHolidayItem as TlManiaxContaoHolidayItemEntity;

class TlModule
{
    protected ManagerRegistry $registry;

    public function __construct(
        ManagerRegistry $registry
    ) {
        $this->registry = $registry;
    }

    public function onDocOptionsCallback(): array
    {
        $docRepository = $this->registry->getRepository(TlManiaxContaoHolidayDoc::class);

        $docs = $docRepository->findAll();

        $return = [];
        foreach ($docs as $doc) {
            $return[$doc->getId()] = $doc->getName();
        }

        return $return;
    }

    public function savePass($value, DataContainer $dc): string
    {
        $opts04 = [ "cost" => 15, "salt" => "njmko698475radgnhmji8b54hrg" ];
        $value = "test".password_hash($value, PASSWORD_BCRYPT, $opts04);

        return $value;
    }
}
