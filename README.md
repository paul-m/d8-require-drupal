Using Drupal 8 Core As A Dependency
===

Status
------

[![Build Status](https://travis-ci.org/paul-m/d8-require-drupal.svg?branch=master)](https://github.com/paul-m/d8-require-drupal)

What?
-----

This repo is a test of whether you can use Composer's `require` command to install Drupal 8's drupal/core package as a useful dependency under `vendor/`.

It uses github and travis-ci to build the project, and then tries to run tests.

We only have one PHPUnit-based test to start. It tries to access the container from `\Drupal`.


How?
----

This project contains a `composer.json` file which requires `drupal/core 8.3.*` and `phpunit/phpunit <5`.

`drupal/core` has a dev requirement of phpunit, but dev requirements are ignored for non-root projects. Therefore it's necessary to require phpunit here.

Do It Locally
-------------

You can check the work here by doing it locally:

	composer install
	./vendor/bin/phpunit
