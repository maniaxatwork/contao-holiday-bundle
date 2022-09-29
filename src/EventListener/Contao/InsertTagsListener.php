<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Jobs Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoJobs\EventListener\Contao;

use Contao\Input;
use Contao\Config;
use Doctrine\ORM\EntityManagerInterface;
use Contao\CoreBundle\ServiceAnnotation\Hook;
use Maniax\ContaoJobs\Entity\TlManiaxContaoJobsOffer;

/**
 * @Hook("replaceInsertTags")
 */
class InsertTagsListener
{
    public const TAG = 'job';

    /**
     * @var EntityManagerInterface
     */
    protected $registry;

    /**
    * @var string|null
     */
    protected $autoItem;

    public function __construct(EntityManagerInterface $registry)
    {
        $this->registry = $registry;
    }

    public function __invoke(string $tag)
    {
        $chunks = explode('::', $tag);

        if (self::TAG !== $chunks[0]) {
            return false;
        }

        $this->handelAutoItem();

        if (!$this->autoItem) {
            return false;
        }

        $jobOfferRepo = $this->registry->getRepository(TlManiaxContaoJobsOffer::class);

        $jobOfferData = $jobOfferRepo->findOneBy(
            ['alias' => $this->autoItem]
        );

        if (null !== $jobOfferData) {
            if ('id' === $chunks[1]) {
                return (string)$jobOfferData->getId();
            }

            if ('title' === $chunks[1]) {
                return (string)$jobOfferData->getTitle();
            }

            if ('alias' === $chunks[1]) {
                return (string)$jobOfferData->getAlias();
            }
        }

        return false;
    }

    public function handelAutoItem(): void
    {
        if (null === $this->autoItem) {
            if (!isset($_GET['items']) && isset($_GET['auto_item']) && Config::get('useAutoItem')) {
                Input::setGet('items', Input::get('auto_item'));
            }

            $this->autoItem = Input::get('items');
        }
    }
}
