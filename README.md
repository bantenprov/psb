# psb

[![Join the chat at https://gitter.im/psb/Lobby](https://badges.gitter.im/psb/Lobby.svg)](https://gitter.im/psb/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/psb/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/psb/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/psb/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/psb/build-status/master)
[![Latest Stable Version](https://poser.pugx.org/bantenprov/psb/v/stable)](https://packagist.org/packages/bantenprov/psb)
[![Total Downloads](https://poser.pugx.org/bantenprov/psb/downloads)](https://packagist.org/packages/bantenprov/psb)
[![Latest Unstable Version](https://poser.pugx.org/bantenprov/psb/v/unstable)](https://packagist.org/packages/bantenprov/psb)
[![License](https://poser.pugx.org/bantenprov/psb/license)](https://packagist.org/packages/bantenprov/psb)
[![Monthly Downloads](https://poser.pugx.org/bantenprov/psb/d/monthly)](https://packagist.org/packages/bantenprov/psb)
[![Daily Downloads](https://poser.pugx.org/bantenprov/psb/d/daily)](https://packagist.org/packages/bantenprov/psb)

PSB

## Install
using composer

Install Tanara
~~~
$ composer create-project bantenprov/tanara:dev-dev
~~~

Install PSB
~~~
$ composer require bantenprov/psb:"dev-master"
~~~

## Download
git clone
~~~
$ git clone https://github.com/bantenprov/psb.git
~~~

## Edit config/App.php
~~~
'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
//==
        Bantenprov\Psb\PsbServiceProvider::class,
~~~

## Publish vendor command :
~~~
$ php artisan vendor:publish --tag=psb-assets --force
~~~
