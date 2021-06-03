# Dadolun_EnhancedWishlist

## Features
This module adds a flag already added on wishlist items on listings and product page

## Installation
You can install this module adding it on app/code folder or with composer.
##### COMPOSER
You need to update your composer.json "repositories" node:
```
{
    "type": "vcs",
    "url":  "git@github.com:dadolun95/magento2-enhanced-wishlist.git"
}
```
Then execute this command:
```
composer require dadolun95/magento2-enhanced-wishlist
```
Then you'll need to enable the module and update your database:
```
php bin/magento module:enable Dadolun_EnhancedWishlist
php bin/magento setup:upgrade
```
##### SOURCE CODE
If you choose to add the module from source code instead of using composer you need to add module's files on your app/code folder.
Then enable it and update the database:
```
php bin/magento module:enable Dadolun_EnhancedWishlist
php bin/magento setup:upgrade
```
##### CONFIGURATION
You can update default configs on Stores > Configurations > Customer > Wishlist > Enhanced Wishlist" section.

## Contributing
Contributions are very welcome. In order to contribute, please fork this repository and submit a [pull request](https://docs.github.com/en/free-pro-team@latest/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request).
