<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'auth', 'as' => 'auth'], function () use ($router) {
        $router->post('login',    ['as' => 'login',     'uses' => 'AuthController@login']);
        $router->post('logout',   ['as' => 'logout',   'uses' => 'AuthController@logout']);
        $router->post('refresh',   ['as' => 'refresh',   'uses' => 'AuthController@refresh']);
        $router->post('me',   ['as' => 'me',   'uses' => 'AuthController@me']);
    });
});
