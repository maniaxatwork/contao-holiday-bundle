<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Portfolio Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoPortfolio\Picker;

use Maniax\ContaoPortfolio\Helper\PermissionsHelper;
use Contao\CoreBundle\Picker\AbstractPickerProvider;
use Contao\CoreBundle\Picker\DcaPickerProviderInterface;
use Contao\CoreBundle\Picker\PickerConfig;

class ManiaxContaoPortfolioCategoriesPickerProvider extends AbstractPickerProvider implements DcaPickerProviderInterface
{
    /**
     * @var PermissionsHelper
     */
    private $permissionsHelper;

    /**
     * @param PermissionsHelper $permissionsHelper
     */
    public function PermissionsHelper(PermissionsHelper $permissionsHelper)
    {
        $this->permissionsHelper = $permissionsHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function getDcaTable()
    {
        return 'tl_maniax_contao_portfolio_category';
    }

    /**
     * {@inheritdoc}
     */
    public function getDcaAttributes(PickerConfig $config)
    {
        $attributes = ['fieldType' => 'checkbox'];

        if ($fieldType = $config->getExtra('fieldType')) {
            $attributes['fieldType'] = $fieldType;
        }

        if ($this->supportsValue($config)) {
            $attributes['value'] = \array_map('intval', \explode(',', $config->getValue()));
        }

        if (\is_array($rootNodes = $config->getExtra('rootNodes'))) {
            $attributes['rootNodes'] = $rootNodes;
        }

        return $attributes;
    }

    /**
     * {@inheritdoc}
     */
    public function convertDcaValue(PickerConfig $config, $value)
    {
        return (int) $value;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'maniaxContaoPortfolioCategoriesPicker';
    }

    /**
     * {@inheritdoc}
     */
    public function supportsContext($context)
    {
        if ($this->permissionsHelper === null) {
            return false;
        }

        return 'maniaxContaoPortfolioCategories' === $context && ($this->permissionsHelper->canAccessModule('settings') || $this->permissionsHelper->canAccessModule('settings'));
    }

    /**
     * {@inheritdoc}
     */
    public function supportsValue(PickerConfig $config)
    {
        foreach (\explode(',', $config->getValue()) as $id) {
            if (!\is_numeric($id)) {
                return false;
            }
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function getRouteParameters(PickerConfig $config = null)
    {
        return ['do' => 'tl_maniax_contao_portfolio_items', 'table' => 'tl_maniax_contao_portfolio_category'];
    }
}
