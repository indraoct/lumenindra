<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

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