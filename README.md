Installing Drupal Using Composer Create-Project
===

Status
---
[![Build Status](https://travis-ci.org/paul-m/d8-require-drupal.svg?branch=master)](https://travis-ci.org/paul-m/d8-create-project)

What?
---

This repo is a test of whether you can use Composer's `require` command to install Drupal 8's core as a useful dependency.

It uses github and travis-ci to build theh project, and then tries to run tests.

We only have one PHPUnit-based test to start.

We are emulating this sequence of commands in travis-ci:

    $ composer require drupal/core 8.0.*@dev
    $ ./vendor/bin/phpunit

How?
---

The travis-ci build happens whenever someone pushes to this repo. If you don't have access, you can't push against this repo (and you don't). You can, however, choose from the following options:

* Fork your own repo, and push to your own repo to your heart's content. Please change the github OAuth token if you do.
* Perform the test locally. Just perform the commands listed in the What? section.

Why?
---

Some folks think Drupal 8's core is useful as a managed dependency. Others don't. Let's find out what Drupal's actual behavior is.

What does this test show?
---

This test shows whether Drupal is modular enough to run as a dependency under Composer's `vendor/` directory.
