<?php

/*
 * This file is part of contao-jobs-bundle.
 *
 * (c) Stephan Buder 2022 <stephan@maniax-at-work.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/maniaxatwork/contao-jobs-bundle
 */

namespace ManiaxAtWork\ContaoJobsBundle;

use Contao\Date;
use Contao\Module;
use Contao\System;
use Contao\UserModel;
use Contao\FilesModel;
use Contao\StringUtil;
use Contao\ContentModel;
use Contao\FrontendTemplate;
use Contao\Model\Collection;
use Contao\CoreBundle\Security\ContaoCorePermissions;

/**
 * Parent class for jobs modules.
 *
 * @property string $jobs_template
 * @property mixed  $jobs_metaFields
 */
abstract class ModuleContaoJobs extends Module
{
	/**
	 * Sort out protected archives
	 *
	 * @param array $arrArchives
	 *
	 * @return array
	 */
	protected function sortOutProtected($arrArchives)
	{
		if (empty($arrArchives) || !\is_array($arrArchives))
		{
			return $arrArchives;
		}

		$objArchive = ContaoJobsArchiveModel::findMultipleByIds($arrArchives);
		$arrArchives = array();

		if ($objArchive !== null)
		{
			$security = System::getContainer()->get('security.helper');

			while ($objArchive->next())
			{
				if ($objArchive->protected && !$security->isGranted(ContaoCorePermissions::MEMBER_IN_GROUPS, StringUtil::deserialize($objArchive->groups, true)))
				{
					continue;
				}

				$arrArchives[] = $objArchive->id;
			}
		}

		return $arrArchives;
	}

	/**
	 * Parse an item and return it as string
	 *
	 * @param ContaoJobsModel $objArticle
	 * @param boolean   $blnAddArchive
	 * @param string    $strClass
	 * @param integer   $intCount
	 *
	 * @return string
	 */
	protected function parseArticle($objArticle, $blnAddArchive=false, $strClass='', $intCount=0)
	{
		$objTemplate = new FrontendTemplate($this->jobs_template ?: 'jobs_latest');
		$objTemplate->setData($objArticle->row());

		if ($objArticle->cssClass)
		{
			$strClass = ' ' . $objArticle->cssClass . $strClass;
		}

		$objTemplate->class = $strClass;
		$objTemplate->jobsHeadline = $objArticle->headline;
		$objTemplate->linkHeadline = $this->generateLink($objArticle->headline, $objArticle, $blnAddArchive);
		$objTemplate->more = $this->generateLink($GLOBALS['TL_LANG']['MSC']['more'], $objArticle, $blnAddArchive, true);
		$objTemplate->link = ContaoJobs::generateJobsUrl($objArticle, $blnAddArchive);
		$objTemplate->archive = $objArticle->getRelated('pid');
		$objTemplate->count = $intCount;
		$objTemplate->text = '';
		$objTemplate->hasText = false;
		$objTemplate->hasTeaser = false;
		$objTemplate->hasReader = true;

        // Job Location Address
        $address = $objArticle->jobLocationStreet .", ". $objArticle->jobLocationPostalCode ." ". $objArticle->jobLocationCity;

        if ($objArticle->jobLocationRegion)
        {
            $address .= " | ". $objArticle->jobLocationRegion;
        }

        if ($objArticle->jobLocationCountry)
        {
            if ($objArticle->jobLocationRegion)
            {
                $address .= ",";
            }

            $address .= " ". $objArticle->jobLocationCountry;
        }
        $objTemplate->address = $address;

		// Clean the RTE output
		if ($objArticle->shortDescription)
		{
			$objTemplate->hasTeaser = true;
			$objTemplate->shortDescription = $objArticle->shortDescription;
			$objTemplate->shortDescription = StringUtil::encodeEmail($objTemplate->shortDescription);
		}

		// Compile the jobs text
		else
		{
			$id = $objArticle->id;

			$objTemplate->text = function () use ($id)
			{
				$strText = '';
				$objElement = ContentModel::findPublishedByPidAndTable($id, 'tl_jobs');

				if ($objElement !== null)
				{
					while ($objElement->next())
					{
						$strText .= $this->getContentElement($objElement->current());
					}
				}

				return $strText;
			};

			$objTemplate->hasText = static function () use ($objArticle)
			{
				return ContentModel::countPublishedByPidAndTable($objArticle->id, 'tl_jobs') > 0;
			};
		}

		$arrMeta = $this->getMetaFields($objArticle);

		// Add the meta information
		$objTemplate->date = $arrMeta['date'] ?? null;
		$objTemplate->hasMetaFields = !empty($arrMeta);
		$objTemplate->timestamp = $objArticle->datePosted;
		$objTemplate->datetime = date('Y-m-d\TH:i:sP', $objArticle->datePosted);
		$objTemplate->addImage = false;
		$objTemplate->addBefore = false;

		// Add an image
		if ($objArticle->addImage)
		{
			$figureBuilder = System::getContainer()
				->get('contao.image.studio')
				->createFigureBuilder()
				->from($objArticle->singleSRC)
				->setSize([400, 400, 'proportional'])
				->setMetadata($objArticle->getOverwriteMetadata())
				->enableLightbox(false);

			if (null !== ($figure = $figureBuilder->buildIfResourceExists()))
			{
				// Rebuild with link to jobs article if none is set
				if (!$figure->getLinkHref())
				{
					$linkTitle = StringUtil::specialchars(sprintf($GLOBALS['TL_LANG']['MSC']['readMore'], $objArticle->headline), true);

					$figure = $figureBuilder
						->setLinkHref(null)
						->setLinkAttribute('title', null)
						->build();
				}

				$figure->applyLegacyTemplateData($objTemplate);
			}
		}

		$objTemplate->enclosure = array();

		// Add enclosures
		if ($objArticle->addEnclosure)
		{
			$this->addEnclosuresToTemplate($objTemplate, $objArticle->row());
		}

		// HOOK: add custom logic
		if (isset($GLOBALS['TL_HOOKS']['parseArticles']) && \is_array($GLOBALS['TL_HOOKS']['parseArticles']))
		{
			foreach ($GLOBALS['TL_HOOKS']['parseArticles'] as $callback)
			{
				$this->import($callback[0]);
				$this->{$callback[0]}->{$callback[1]}($objTemplate, $objArticle->row(), $this);
			}
		}

		// Tag the jobs
		if (System::getContainer()->has('fos_http_cache.http.symfony_response_tagger'))
		{
			$responseTagger = System::getContainer()->get('fos_http_cache.http.symfony_response_tagger');
			$responseTagger->addTags(array('contao.db.tl_jobs.' . $objArticle->id));
		}

		// schema.org information
		$objTemplate->getSchemaOrgData = static function () use ($objTemplate, $objArticle): array
		{
			$jsonLd = ContaoJobs::getSchemaOrgData($objArticle);

			if ($objTemplate->addImage && $objTemplate->figure)
			{
				$jsonLd['image'] = $objTemplate->figure->getSchemaOrgData();
			}

			return $jsonLd;
		};

		return $objTemplate->parse();
	}

	/**
	 * Parse one or more items and return them as array
	 *
	 * @param Collection $objArticles
	 * @param boolean    $blnAddArchive
	 *
	 * @return array
	 */
	protected function parseArticles($objArticles, $blnAddArchive=false)
	{
		$limit = $objArticles->count();

		if ($limit < 1)
		{
			return array();
		}

		$count = 0;
		$arrArticles = array();
		$uuids = array();

		foreach ($objArticles as $objArticle)
		{
			if ($objArticle->addImage && $objArticle->singleSRC)
			{
				$uuids[] = $objArticle->singleSRC;
			}
		}

		// Preload all images in one query, so they are loaded into the model registry
		FilesModel::findMultipleByUuids($uuids);

		foreach ($objArticles as $objArticle)
		{
			$arrArticles[] = $this->parseArticle($objArticle, $blnAddArchive, ((++$count == 1) ? ' first' : '') . (($count == $limit) ? ' last' : '') . ((($count % 2) == 0) ? ' odd' : ' even'), $count);
		}

		return $arrArticles;
	}

	/**
	 * Return the meta fields of a jobs article as array
	 *
	 * @param ContaoJobsModel $objArticle
	 *
	 * @return array
	 */
	protected function getMetaFields($objArticle)
	{
		$meta = StringUtil::deserialize($this->jobs_metaFields);

		if (!\is_array($meta))
		{
			return array();
		}

		/** @var PageModel $objPage */
		global $objPage;

		$return = array();

		foreach ($meta as $field)
		{
			switch ($field)
			{
				case 'datePosted':
					$return['datePosted'] = Date::parse($objPage->datimFormat, $objArticle->datePosted);
					break;
			}
		}

		return $return;
	}

	/**
	 * Generate a link and return it as string
	 *
	 * @param string    $strLink
	 * @param ContaoJobsModel $objArticle
	 * @param boolean   $blnAddArchive
	 * @param boolean   $blnIsReadMore
	 *
	 * @return string
	 */
	protected function generateLink($strLink, $objArticle, $blnAddArchive=false, $blnIsReadMore=false)
	{
		$blnIsInternal = $objArticle->source != 'external';
		$strReadMore = $blnIsInternal ? $GLOBALS['TL_LANG']['MSC']['readMore'] : $GLOBALS['TL_LANG']['MSC']['open'];
		$strArticleUrl = ContaoJobs::generateJobsUrl($objArticle, $blnAddArchive);

		return sprintf(
			'<a href="%s" title="%s"%s>%s%s</a>',
			$strArticleUrl,
			StringUtil::specialchars(sprintf($strReadMore, $blnIsInternal ? $objArticle->headline : $strArticleUrl), true),
			($objArticle->target && !$blnIsInternal ? ' target="_blank" rel="noreferrer noopener"' : ''),
			$strLink,
			($blnIsReadMore && $blnIsInternal ? '<span class="invisible"> ' . $objArticle->headline . '</span>' : '')
		);
	}
}

class_alias(ModuleContaoJobs::class, 'ModuleContaoJobs');
