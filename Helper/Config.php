<?php
/**
 * @category    Magento 2
 * @package     Dadolun_EnhancedWishlist
 * @copyright   Copyright (c) 2020 Dadolun (https://github.com/dadolun95)
 */

namespace Dadolun\EnhancedWishlist\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Config
 * @package Dadolun\EnhancedWishlist\Helper
 */
class Config extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Module section
     */
    const SECTION_MODULE = 'wishlist';
    /**
     * Configuration section
     */
    const GROUP_CONFIGURATION = self::SECTION_MODULE . DS . 'enhanced_wishlist';
    /**
     * Status
     */
    const STATUS = self::GROUP_CONFIGURATION . DS . 'status';

    /**
     * Core store config
     *
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * Config constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @param null $store
     * @param string $scope
     * @return mixed
     */
    public function isEnhancedWishlistEnabled($store = null, $scope = ScopeInterface::SCOPE_STORE)
    {
        return $this->scopeConfig->isSetFlag(
            self::STATUS,
            $scope,
            $store
        );
    }

    /**
     * @param $section
     * @param null $store
     * @param string $scope
     * @return mixed
     */
    public function getSectionSelector($section, $store = null, $scope = ScopeInterface::SCOPE_STORE)
    {
        return $this->scopeConfig->getValue(
            self::GROUP_CONFIGURATION . DS . $section,
            $scope,
            $store
        );
    }
}
