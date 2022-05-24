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

$router->get('/Saludo', function(){
    return 'Hola mi nombre es Alan';
});

$router->post('/Saludo', function(){
    return 'se creo un dato';
});


$router->put('/Saludo', function(){
    return 'update a dato';
});

$router->delete('/Saludo', function(){
    return 'se elimino un dato';
});
