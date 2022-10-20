<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

use Contao\BackendUser;
use Contao\System;
use Maniax\ContaoPortfolio\EventListener\Contao\DCA\TlManiaxContaoPortfolioItem;

$GLOBALS['TL_DCA']['tl_maniax_contao_portfolio_item'] = [
    'config' => [
        'dataContainer' => 'Table',
        'ctable' => ['tl_content'],
        'switchToEdit' => true,
        'markAsCopy' => 'title',
        'enableVersioning' => true,
        'onload_callback' => [[
            TlManiaxContaoPortfolioItem::class,
            'onShowInfoCallback',
        ]],
        'onsubmit_callback' => [[
            TlManiaxContaoPortfolioItem::class,
            'saveCallbackGlobal',
        ]],
    ],

    'list' => [
        'sorting' => [
            'mode' => 2,
            'fields' => ['title'],
            'flag' => 1,
            'panelLayout' => 'filter;sort,search,limit',
        ],
        'label' => [
            'fields' => ['title'],
            'showColumns' => false,
        ],
        'operations' => [
            'editheader' => [
                'href' => 'act=edit',
                'icon' => 'header.svg',
            ],
            'copy' => [
                'href' => 'act=copy',
                'icon' => 'copy.svg',
            ],
            'delete' => [
                'href' => 'act=delete',
                'icon' => 'delete.svg',
                'attributes' => 'onclick="if(!confirm(\''.($GLOBALS['TL_LANG']['MSC']['deleteConfirm'] ?? null).'\'))return false;Backend.getScrollOffset()"',
            ],
            'toggle' => [
                'href' => null,
                'icon' => 'visible.svg',
                'attributes' => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
                'button_callback' => ['tl_maniax_contao_portfolio_item', 'toggleIcon'],
                'showInHeader' => true,
            ],
            'show' => [
                'href' => 'act=show',
                'icon' => 'show.svg',
            ],
        ],
    ],

    'palettes' => [
        '__selector__' => ['category', 'addImage', 'overwriteMeta'],
        'default' => '{title_legend},title;{settings_legend},category;{expert_legend:hide},cssClass;{publish_legend},published,start,stop',
    ],
    'subpalettes' => [
        'overwriteMeta' => 'alt,imageTitle,imageUrl',
    ],

    'fields' => [
        'id' => [
        ],
        'tstamp' => [
            'sorting' => true,
            'flag' => 6,
        ],
        'title' => [
            'inputType' => 'text',
            'exclude' => true,
            'sorting' => true,
            'search' => true,
            'eval' => [
                'mandatory' => true,
                'maxlength' => 255,
                'tl_class' => 'w50',
            ],
        ],
        'category' => [
            'inputType' => 'select',
            'exclude' => true,
            'filter' => true,
            'options_callback' => [
                TlManiaxContaoPortfolioItem::class,
                'onCategoryOptionsCallback',
            ],
            'eval' => [
                'submitOnChange'=>true,
                'includeBlankOption' => true,
                'tl_class' => 'w50',
                'mandatory' => true,
                'multiple' => false,
                'chosen' => true,
            ],
        ],
        'description' => [
            'exclude' => true,
            'search' => true,
            'inputType' => 'textarea',
            'eval' => [
                'rte' => 'tinyMCE',
                'tl_class' => 'clr',
            ],
        ],
        'videoUrl' => [
            'exclude' => true,
            'inputType' => 'text',
            'eval' => [
                'mandatory' => true,
                'decodeEntities' => true,
                'maxlength' => 255,
                'dcaPicker'=>true,
                'tl_class' => 'w50 clr',
            ],
        ],
        'singleSRC' => [
            'exclude' => true,
            'inputType' => 'fileTree',
            'eval' => ['fieldType' => 'radio', 'filesOnly' => true, 'extensions'=>'%contao.image.valid_extensions%', 'mandatory' => true, 'tl_class' => 'clr'],
        ],
        'size' => [
			'exclude' => true,
			'inputType' => 'imageSize',
			'reference' => &$GLOBALS['TL_LANG']['MSC'],
			'eval' => ['rgxp'=>'natural', 'includeBlankOption'=>true, 'nospace'=>true, 'helpwizard'=>true, 'tl_class'=>'w50'],
			'options_callback' => static function ()
			{
				return System::getContainer()->get('contao.image.sizes')->getOptionsForUser(BackendUser::getInstance());
			},
			'sql' => "varchar(64) NOT NULL default ''",
		],
        'fullsize' => [
			'exclude' => true,
			'inputType' => 'checkbox',
			'eval' => array('tl_class'=>'w50 m12'),
		],
        'overwriteMeta' => [
			'exclude' => true,
			'inputType' => 'checkbox',
			'eval' => ['submitOnChange' => true, 'tl_class' => 'w50 clr'],
			'sql' => ['type' => 'boolean', 'default' => false],
		],
        'alt' => [
			'exclude' => true,
			'search' => true,
			'inputType' => 'text',
			'eval' => ['maxlength'=>255, 'tl_class'=>'w50'],
			'sql' => "varchar(255) NOT NULL default ''",
        ],
		'imageTitle' => [
			'exclude' => true,
			'search' => true,
			'inputType' => 'text',
			'eval' => ['maxlength'=>255, 'tl_class'=>'w50'],
			'sql' => "varchar(255) NOT NULL default ''",
        ],
        'imageUrl' => [
			'label' => &$GLOBALS['TL_LANG']['tl_content']['imageUrl'],
			'exclude' => true,
			'search' => true,
			'inputType' => 'text',
			'eval' => ['rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>2048, 'dcaPicker'=>true, 'tl_class'=>'w50 wizard'],
			'sql' => "varchar(2048) NOT NULL default ''",
        ],
        'multiSRC' => [
			'exclude' => true,
			'inputType' => 'fileTree',
			'eval' => ['tl_class'=>'clr', 'multiple'=>true, 'fieldType'=>'checkbox', 'orderField'=>'orderSRC', 'files'=>true, 'isGallery'=>true, 'extensions'=>'%contao.image.valid_extensions%'],
        ],
		'orderSRC' => [
			'label' => &$GLOBALS['TL_LANG']['MSC']['sortOrder'],
        ],
        'perRow' => [
			'exclude' => true,
			'inputType' => 'select',
			'options' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
			'eval' => ['tl_class'=>'w50'],
		],
		'sortBy' => [
			'exclude' => true,
			'inputType' => 'select',
			'options' => ['custom', 'name_asc', 'name_desc', 'date_asc', 'date_desc', 'random'],
			'reference' => &$GLOBALS['TL_LANG']['tl_content'],
			'eval' => ['tl_class'=>'w50 clr'],
        ],
        'cssClass' => [
            'exclude' => true,
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
            'sql' => "varchar(255) NOT NULL default ''",
        ],
        'published' => [
            'exclude' => true,
            'filter' => true,
            'flag' => 1,
            'inputType' => 'checkbox',
            'eval' => [
                'isBoolean' => true,
            ],
            'sql' => [
                'type' => 'boolean',
                'default' => false,
            ],
        ],
        'start' => [
            'exclude' => true,
            'inputType' => 'text',
            'eval' => ['rgxp' => 'datim', 'datepicker' => true, 'tl_class' => 'w50 wizard'],
        ],
        'stop' => [
            'exclude' => true,
            'inputType' => 'text',
            'eval' => ['rgxp' => 'datim', 'datepicker' => true, 'tl_class' => 'w50 wizard'],
        ],
    ],
];

class tl_maniax_contao_portfolio_item extends \Contao\Backend
{
    /**
     * Import the back end user object.
     */
    public function __construct()
    {
        parent::__construct();
        $this->import('Contao\BackendUser', 'User');
    }

    /**
     * Return the "toggle visibility" button.
     *
     * @param array  $row
     * @param string $href
     * @param string $label
     * @param string $title
     * @param string $icon
     * @param string $attributes
     *
     * @return string
     */
    public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
    {
        if (Contao\Input::get('tid')) {
            $this->toggleVisibility(Contao\Input::get('tid'), (1 == Contao\Input::get('state')), (func_num_args() <= 12 ? null : func_get_arg(12)));
            $this->redirect($this->getReferer());
        }

        // Check permissions AFTER checking the tid, so hacking attempts are logged
        if (!$this->User->hasAccess('tl_maniax_contao_portfolio_item::published', 'alexf')) {
            return '';
        }

        $href .= '&amp;tid='.$row['id'].'&amp;state='.($row['published'] ? '' : 1);

        if (!$row['published']) {
            $icon = 'invisible.svg';
        }

        return '<a href="'.$this->addToUrl($href).'" title="'.Contao\StringUtil::specialchars($title).'"'.$attributes.'>'.Contao\Image::getHtml($icon, $label, 'data-state="'.($row['published'] ? 1 : 0).'"').'</a> ';
    }

    /**
     * Disable/enable a portfolio item.
     *
     * @param int                  $intId
     * @param bool                 $blnVisible
     * @param Contao\DataContainer $dc
     *
     * @throws Contao\CoreBundle\Exception\AccessDeniedException
     */
    public function toggleVisibility($intId, $blnVisible, Contao\DataContainer $dc = null): void
    {
        // Set the ID and action
        Contao\Input::setGet('id', $intId);
        Contao\Input::setGet('act', 'toggle');

        if ($dc) {
            $dc->id = $intId; // see #8043
        }

        // Trigger the onload_callback
        if (isset($GLOBALS['TL_DCA']['tl_maniax_contao_portfolio_item']['config']['onload_callback']) && is_array($GLOBALS['TL_DCA']['tl_maniax_contao_portfolio_item']['config']['onload_callback'])) {
            foreach ($GLOBALS['TL_DCA']['tl_maniax_contao_portfolio_item']['config']['onload_callback'] as $callback) {
                if (is_array($callback)) {
                    $this->import($callback[0]);
                    $this->{$callback[0]}->{$callback[1]}($dc);
                } elseif (is_callable($callback)) {
                    $callback($dc);
                }
            }
        }

        // Check the field access
        if (!$this->User->hasAccess('tl_maniax_contao_portfolio_item::published', 'alexf')) {
            throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to publish/unpublish portfolio item ID "'.$intId.'".');
        }

        $objRow = $this->Database->prepare('SELECT * FROM tl_maniax_contao_portfolio_item WHERE id=?')
            ->limit(1)
            ->execute($intId);

        if ($objRow->numRows < 1) {
            throw new Contao\CoreBundle\Exception\AccessDeniedException('Invalid portfolio item ID "'.$intId.'".');
        }

        // Set the current record
        if ($dc) {
            $dc->activeRecord = $objRow;
        }

        $objVersions = new Contao\Versions('tl_maniax_contao_portfolio_item', $intId);
        $objVersions->initialize();

        // Trigger the save_callback
        if (isset($GLOBALS['TL_DCA']['tl_maniax_contao_portfolio_item']['config']['save_callback']) && is_array($GLOBALS['TL_DCA']['tl_maniax_contao_portfolio_item']['fields']['published']['save_callback'])) {
            foreach ($GLOBALS['TL_DCA']['tl_maniax_contao_portfolio_item']['fields']['published']['save_callback'] as $callback) {
                if (is_array($callback)) {
                    $this->import($callback[0]);
                    $blnVisible = $this->{$callback[0]}->{$callback[1]}($blnVisible, $dc);
                } elseif (is_callable($callback)) {
                    $blnVisible = $callback($blnVisible, $dc);
                }
            }
        }

        $time = time();

        // Update the database
        $this->Database->prepare("UPDATE tl_maniax_contao_portfolio_item SET tstamp=$time, published='".($blnVisible ? '1' : '0')."' WHERE id=?")
            ->execute($intId);

        if ($dc) {
            $dc->activeRecord->tstamp = $time;
            $dc->activeRecord->published = ($blnVisible ? '1' : '');
        }

        // Trigger the onsubmit_callback
        if (isset($GLOBALS['TL_DCA']['tl_maniax_contao_portfolio_item']['config']['onsubmit_callback']) && is_array($GLOBALS['TL_DCA']['tl_maniax_contao_portfolio_item']['config']['onsubmit_callback'])) {
            foreach ($GLOBALS['TL_DCA']['tl_maniax_contao_portfolio_item']['config']['onsubmit_callback'] as $callback) {
                if (is_array($callback)) {
                    $this->import($callback[0]);
                    $this->{$callback[0]}->{$callback[1]}($dc);
                } elseif (is_callable($callback)) {
                    $callback($dc);
                }
            }
        }

        $objVersions->create();

        if ($dc) {
            $dc->invalidateCacheTags();
        }
    }
}
