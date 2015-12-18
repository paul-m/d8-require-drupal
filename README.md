Using Drupal 8 Core As A Dependency
===

Status
---
[![Build Status](https://travis-ci.org/paul-m/d8-require-drupal.svg?branch=master)](https://github.com/paul-m/d8-require-drupal)

What?
---

This repo is a test of whether you can use Composer's `require` command to install Drupal 8's core as a useful dependency under `vendor/`.

It uses github and travis-ci to build the project, and then tries to run tests.

We only have one PHPUnit-based test to start.

We are sending this sequence of commands to travis-ci:

    $ composer require drupal/core 8.0.*
    $ composer require --dev phpunit/phpunit
    $ ./vendor/bin/phpunit

How?
---

The travis-ci build happens whenever someone pushes to this repo. If you don't have access (and you don't), you can't push against this repo. Otherwise, you can choose from the following options:

* Fork your own repo, and push to your own repo to your heart's content. Please change the github OAuth token if you do.
* Perform the test locally. Just perform the commands listed in the What? section.
