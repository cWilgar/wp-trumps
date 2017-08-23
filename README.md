# Personal Wordpress boilerplate.

This is not intended to be treated as a full app for hosting anywhere. Rather a local wrapper for theme development and keeping track of dependency versions.

## Pre-requisites

Knowledge of:
 - PHP
 - Wordpress setup and development
 - Composer

## Setup & Usage

1. Clone or download this repo.
1. Copy `local-config-example.php` to `local-config.php`, read through it and update all the fields to match your local setup.
1. Make sure `$wp-theme-name` matches the name of your theme in composer.json.
1. Run `composer install` to install wordpress + theme dependencies
1. Start your server [eg `php -S localhost:8000`]

1. Navigate to `https://local.example.com/wp/wp-admin` to access wp-admin 
   - Activate all plugins.
   - Make sure pretty permalinks is enables for API calls to work
