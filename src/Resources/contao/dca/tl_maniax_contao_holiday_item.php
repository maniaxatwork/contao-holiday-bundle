<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Holiday Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

use Contao\BackendUser;
use Contao\System;
use Doctrine\DBAL\Platforms\MySqlPlatform;
use Maniax\ContaoHoliday\EventListener\Contao\DCA\TlManiaxContaoHolidayItem;

$GLOBALS['TL_DCA']['tl_maniax_contao_holiday_item'] = [
    'config' => [
        'dataContainer' => 'Table',
        'ctable' => ['tl_content'],
        'switchToEdit' => true,
        'markAsCopy' => 'title',
        'enableVersioning' => true,
        'onload_callback' => [[
            TlManiaxContaoHolidayItem::class,
            'onShowInfoCallback',
        ]],
        'onsubmit_callback' => [[
            TlManiaxContaoHolidayItem::class,
            'saveCallbackGlobal',
        ]],
    ],

    'list' => [
        'sorting' => [
            'mode' => 0,
            'fields' => ['showBefore'],
            'flag' => 12,
            'panelLayout' => 'filter;sort,search,limit',
        ],
        'label' => [
            'fields' => ['extend', 'location', 'holidayStart', 'holidayStop', 'showBefore'],
            'format' => '%s | %s | %s | %s | %s',
            'label_callback' => [
                TlManiaxContaoHolidayItem::class,
                'onLabelCallback'
            ],
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
                'button_callback' => ['tl_maniax_contao_holiday_item', 'toggleIcon'],
                'showInHeader' => true,
            ],
            'show' => [
                'href' => 'act=show',
                'icon' => 'show.svg',
            ],
        ],
    ],

    'palettes' => [
        '__selector__' => ['extend','footerline'],
        'default' => '{date_legend},holidayStart,holidayStop,showBefore;{extend_legend},extend;{footerline_legend},footerline;{expert_legend:hide},cssClass;{publish_legend},published',
    ],
    'subpalettes' => [
        'extend_hinweis' => 'extendText',
        'extend_standard' => ';{location_legend},location;{doc_legend},vertretungDoc1,vertretungDoc2',
        'footerline' => 'footerlineText',
    ],
    'fields' => [
        'id' => [
        ],
        'tstamp' => [
            'sorting' => true,
            'flag' => 6,
        ],
        'holidayStart' => [
            'exclude' => true,
            'inputType' => 'text',
            'eval' => ['rgxp' => 'date', 'datepicker' => true, 'tl_class' => 'w50 wizard', 'mandatory' => true,],
        ],
        'holidayStop' => [
            'exclude' => true,
            'inputType' => 'text',
            'eval' => ['rgxp' => 'date', 'datepicker' => true, 'tl_class' => 'w50 wizard', 'mandatory' => true,],
        ],
        'showBefore' => [
			'exclude' => true,
            'inputType' => 'text',
            'eval' => ['rgxp' => 'date', 'datepicker' => true, 'tl_class' => 'w50 wizard', 'mandatory' => true,],
		],
        'extend' => [
			'exclude' => true,
			'inputType' => 'select',
            'options' => ['standard' => 'Urlaubsvertretung', 'hinweis' => 'Hinweis'],
            'eval' => ['submitOnChange'=>true],
            'sql' => "varchar(12) NOT NULL default 'standard'",
		],
        'extendText' => [
            'exclude' => true,
            'inputType' => 'textarea',
            'eval' => [
                'rte' => 'tinyMCE',
                'tl_class' => 'clr',
            ],
        ],
        'location' => [
            'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['location'],
            'inputType' => 'select',
            'exclude' => true,
            'filter' => true,
            'options_callback' => [
                TlManiaxContaoHolidayItem::class,
                'onLocationOptionsCallback',
            ],
            'eval' => ['style'=> 'width:400px', 'includeBlankOption' => true, 'tl_class' => 'w50', 'chosen' => true, 'mandatory' => true],
        ],
        'vertretungDoc1' => [
            'exclude'   => true,
            'inputType' => 'multiColumnWizard',
            'eval' => [
                'columnFields' => [
                    'doc' => [
                        'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['doc'],
                        'inputType' => 'select',
                        'exclude' => true,
                        'filter' => true,
                        'options_callback' => [
                            TlManiaxContaoHolidayItem::class,
                            'onDocOptionsCallback',
                        ],
                        'eval' => ['style'=> 'width:400px', 'includeBlankOption' => true, 'tl_class' => 'w50', 'chosen' => true,],
                    ],
                    'vertretungStart' => [
                        'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungStart'],
                        'exclude' => true,
                        'inputType' => 'text',
                        'eval' => ['style'=> 'width:200px', 'rgxp' => 'date', 'datepicker' => true, 'tl_class' => 'clr w50 wizard',],
                    ],
                    'vertretungStop' => [
                        'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungStop'],
                        'exclude' => true,
                        'inputType' => 'text',
                        'eval' => ['style'=> 'width:200px', 'rgxp' => 'date', 'datepicker' => true, 'tl_class' => 'w50 wizard',],
                    ],
                ],
                'maxCount' => 3,
            ],
        ],
        'vertretungDoc2' => [
            'exclude'   => true,
            'inputType' => 'multiColumnWizard',
            'eval' => [
                'columnFields' => [
                    'doc' => [
                        'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['doc'],
                        'inputType' => 'select',
                        'exclude' => true,
                        'filter' => true,
                        'options_callback' => [
                            TlManiaxContaoHolidayItem::class,
                            'onDocOptionsCallback',
                        ],
                        'eval' => ['style'=> 'width:400px', 'includeBlankOption' => true, 'tl_class' => 'w50', 'chosen' => true],
                    ],
                    'vertretungStart' => [
                        'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungStart'],
                        'exclude' => true,
                        'inputType' => 'text',
                        'eval' => ['style'=> 'width:200px', 'rgxp' => 'date', 'datepicker' => true, 'tl_class' => 'clr w50 wizard',],
                    ],
                    'vertretungStop' => [
                        'label' => &$GLOBALS['TL_LANG']['tl_maniax_contao_holiday_item']['vertretungStop'],
                        'exclude' => true,
                        'inputType' => 'text',
                        'eval' => ['style'=> 'width:200px', 'rgxp' => 'date', 'datepicker' => true, 'tl_class' => 'w50 wizard',],
                    ],
                ],
                'maxCount' => 3,
            ],
        ],
        'footerline' => [
			'exclude' => true,
			'inputType' => 'checkbox',
			'eval' => ['tl_class'=>'w50 m12', 'submitOnChange' => true],
            'sql' => ['type' => 'boolean', 'default' => false],
		],
        'footerlineText' => [
            'exclude' => true,
            'inputType' => 'textarea',
            'eval' => [
                'rte' => 'tinyMCE',
                'tl_class' => 'clr',
            ],
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
    ],
];

class tl_maniax_contao_holiday_item extends \Contao\Backend
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
        if (!$this->User->hasAccess('tl_maniax_contao_holiday_item::published', 'alexf')) {
            return '';
        }

        $href .= '&amp;tid='.$row['id'].'&amp;state='.($row['published'] ? '' : 1);

        if (!$row['published']) {
            $icon = 'invisible.svg';
        }

        return '<a href="'.$this->addToUrl($href).'" title="'.Contao\StringUtil::specialchars($title).'"'.$attributes.'>'.Contao\Image::getHtml($icon, $label, 'data-state="'.($row['published'] ? 1 : 0).'"').'</a> ';
    }

    /**
     * Disable/enable a holiday item.
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
        if (isset($GLOBALS['TL_DCA']['tl_maniax_contao_holiday_item']['config']['onload_callback']) && is_array($GLOBALS['TL_DCA']['tl_maniax_contao_holiday_item']['config']['onload_callback'])) {
            foreach ($GLOBALS['TL_DCA']['tl_maniax_contao_holiday_item']['config']['onload_callback'] as $callback) {
                if (is_array($callback)) {
                    $this->import($callback[0]);
                    $this->{$callback[0]}->{$callback[1]}($dc);
                } elseif (is_callable($callback)) {
                    $callback($dc);
                }
            }
        }

        // Check the field access
        if (!$this->User->hasAccess('tl_maniax_contao_holiday_item::published', 'alexf')) {
            throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to publish/unpublish holiday item ID "'.$intId.'".');
        }

        $objRow = $this->Database->prepare('SELECT * FROM tl_maniax_contao_holiday_item WHERE id=?')
            ->limit(1)
            ->execute($intId);

        if ($objRow->numRows < 1) {
            throw new Contao\CoreBundle\Exception\AccessDeniedException('Invalid holiday item ID "'.$intId.'".');
        }

        // Set the current record
        if ($dc) {
            $dc->activeRecord = $objRow;
        }

        $objVersions = new Contao\Versions('tl_maniax_contao_holiday_item', $intId);
        $objVersions->initialize();

        // Trigger the save_callback
        if (isset($GLOBALS['TL_DCA']['tl_maniax_contao_holiday_item']['config']['save_callback']) && is_array($GLOBALS['TL_DCA']['tl_maniax_contao_holiday_item']['fields']['published']['save_callback'])) {
            foreach ($GLOBALS['TL_DCA']['tl_maniax_contao_holiday_item']['fields']['published']['save_callback'] as $callback) {
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
        $this->Database->prepare("UPDATE tl_maniax_contao_holiday_item SET tstamp=$time, published='".($blnVisible ? '1' : '0')."' WHERE id=?")
            ->execute($intId);

        if ($dc) {
            $dc->activeRecord->tstamp = $time;
            $dc->activeRecord->published = ($blnVisible ? '1' : '');
        }

        // Trigger the onsubmit_callback
        if (isset($GLOBALS['TL_DCA']['tl_maniax_contao_holiday_item']['config']['onsubmit_callback']) && is_array($GLOBALS['TL_DCA']['tl_maniax_contao_holiday_item']['config']['onsubmit_callback'])) {
            foreach ($GLOBALS['TL_DCA']['tl_maniax_contao_holiday_item']['config']['onsubmit_callback'] as $callback) {
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
