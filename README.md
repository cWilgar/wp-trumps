# Top-trumps CMS theme

This is not intended to be treated as a full app for hosting anywhere. Rather a local wrapper for theme development and keeping track of dependency versions.

## Pre-requisites

Knowledge of:
 - PHP
 - Wordpress setup and development
 - Composer

## Setup

1. Clone or download this repo.
1. Copy `local-config-sample.php` to `local-config.php`, read through it and update all the fields to match your local setup.
1. Make sure `$wp-theme-name` matches the name of your theme in composer.json.
1. Run `composer install` to install wordpress + theme dependencies
1. Start your server [eg `php -S localhost:8000`]

1. Navigate to `https://local.example.com/wp/wp-admin` to access wp-admin 
   - Activate all plugins
   - Make sure pretty permalinks is enables for API calls to work
1. Navigate to `https://local.example.com/wp-json/wp-trumps/v1/cards/` to view the custom endpoint for the trump card data.

## Usage

This site was hosted on wp-engine at https://carliney.wpengine.com - However I have cancelled my account with them and am currently setting up a new host - coming soon.
~~There is a custom endpoint for getting all of the trump card data in a tidy format at https://carliney.wpengine.com/wp-json/wp-trumps/v1/cards/
