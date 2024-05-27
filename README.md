# Hyp Login

A WordPress Plugin to customize the UI login. This repo contains a magical `.github` folder which contains [Github Actions](https://github.com/features/actions) that automatically check your code against [WordPress Coding Standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/).

## How it works

The plugin folder must contain **hyp-login.php** file and the whole **assets** folder.

1. Install and activate the plugin. 
2. Log out from the dashboard if you are logged in, or go to /wp-login URL address.

## Running Tests

Before running tests, make sure to properly set up the [WordPress Testing Library](https://make.wordpress.org/core/handbook/testing/automated-testing/).

Run the following [Composer](https://getcomposer.org/) commands to install dependencies

```bash
  composer require --dev phpunit/phpunit
  composer require --dev yoast/phpunit-polyfills
```

To run tests, run the following command

```bash
  ./vendor/bin/phpunit tests/*
```
