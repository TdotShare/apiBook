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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'book'], function () use ($router) {

    $router->get('/', function () {
        return 'Book is Work !';
    });

    $router->get('/all', 'BookController@actionIndex');
    $router->get('/view/{id}', 'BookController@actionView');
    $router->post('/create', 'BookController@actionCreate');
    $router->get('/delete/{id}', 'BookController@actionDelete');
    $router->post('/update/{id}', 'BookController@actionUpdate');

});

$router->group(['prefix' => 'author'], function () use ($router) {

    $router->get('/', function () {
        return 'Author is Work !';
    });

    $router->get('/all', 'AuthorController@actionIndex');
    $router->get('/view/{id}', 'AuthorController@actionView');
    $router->post('/create', 'AuthorController@actionCreate');
    $router->get('/delete/{id}', 'AuthorController@actionDelete');
    $router->post('/update/{id}', 'AuthorController@actionUpdate');

});
