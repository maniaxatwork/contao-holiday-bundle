<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoJobs\Helper;

use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\StringUtil;

class DataTypeMapper
{
    private ContaoFramework $framework;

    public function __construct(ContaoFramework $framework)
    {
        $this->framework = $framework;
    }

    public function serializedToJson(string $serializedData): string
    {
        /** @var StringUtil $stringUtil */
        $stringUtil = $this->framework->getAdapter(StringUtil::class);

        $data = $stringUtil->deserialize($serializedData);

        return json_encode($data);
    }

    public function jsonToSerialized(?string $jsonData): ?string
    {
        if (null === $jsonData) {
            return serialize([]);
        }

        return serialize(json_decode($jsonData, true));
    }
}
