# Lumen PHP Framework Edited By Indra Octama

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Cara Panggil

POST DATA :

Ketik di terminal => curl --data "name=indra&skill=web development" http://localhost/lumenindra/postdataindra

GET DATA :

Ketik di browser  http://localhost/lumenindra/getdataindra

## Routing

/**
 * get data indra
 */
$app->get('getdataindra', [
    'as' => 'profile', 'uses' => 'IndraController@getdata'
]);


/**
 * post data indra
 */
$app->post('postdataindra', [
    'as' => 'profile', 'uses' => 'IndraController@postdata'
]);