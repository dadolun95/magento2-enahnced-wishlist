/**
 * @category    Magento 2
 * @package     Dadolun_EnhancedWishlist
 * @copyright   Copyright (c) 2020 Dadolun (https://github.com/dadolun95)
 */

define([
        'jquery',
        'Magento_Customer/js/customer-data'
    ],
    function ($, customerData) {
        'use strict';

        $.widget('dadolun.wishlistHeartFiller', {
            options: {},
            _create: function () {
                let wishlistElements = customerData.get('wishlist')();
                let wishlistDataPost = this.element.attr("data-post");
                let currentId = null;
                if (typeof wishlistDataPost !== 'undefined') {
                    let data = JSON.parse(wishlistDataPost);
                    currentId = data["data"]["product"];
                } else {
                    // OX_AjaxWishlist compatibility
                    let wishlistDataProductId = this.element.attr("data-product-id");
                    if (typeof wishlistDataProductId !== 'undefined') {
                        currentId = wishlistDataProductId;
                    }
                }
                let wishlistIds = [];
                $(wishlistElements["items"]).each(function () {
                    if (typeof $(this).attr("product_id") !== 'undefined') {
                        wishlistIds.push(
                            parseInt($(this).attr("product_id"))
                        );
                    }
                });
                if (currentId !== null && wishlistIds.includes(currentId)) {
                    this.element.addClass("active");
                }
            }
        });
        return $.dadolun.wishlistHeartFiller;
    }
);
