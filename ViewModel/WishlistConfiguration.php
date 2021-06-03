<?php
/**
 * @category    Magento 2
 * @package     Dadolun_EnhancedWishlist
 * @copyright   Copyright (c) 2020 Dadolun (https://github.com/dadolun95)
 */

namespace Dadolun\EnhancedWishlist\ViewModel;

use Dadolun\EnhancedWishlist\Helper\Config;

/**
 * Class WishlistConfiguration
 * @package Dadolun\EnhancedWishlist\ViewModel
 */
class WishlistConfiguration implements \Magento\Framework\View\Element\Block\ArgumentInterface
{

    /**
     * @var Config
     */
    protected $configHelper;

    /**
     * AutomationTrackingManager constructor.
     * @param Config $configHelper
     */
    public function __construct(
        Config $configHelper
    ) {
        $this->configHelper = $configHelper;
    }

    /**
     * @return mixed
     */
    public function isEnhancedWishlistEnabled()
    {
        return $this->configHelper->isEnhancedWishlistEnabled();
    }

    /**
     * @param $section
     * @return mixed
     */
    public function getSectionConfiguration($section)
    {
        return $this->configHelper->getSectionSelector($section);
    }
}
