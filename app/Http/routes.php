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

$app->group(['namespace' => 'Admin'], function() use ($app) {

    $app->group(['prefix'=>'admin'], function() use ($app) {

        $app->group(['prefix'=>'users'], function() use ($app) {
            $app->get('/', 'UserController@getList');
            $app->get('/{id:[0-9]+}', 'UserController@getOne');
            $app->get('/', 'UserController@getList');
            $app->get('/', 'UserController@getList');
        });

    });

});