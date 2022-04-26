<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(['prefix' => 'hr'], function () use ($router) {
    $router->group(['prefix' => 'individuals'], function () use ($router) {
        $router->get('/', ['uses' => 'IndividualController@index']);
        $router->post('/create', ['uses' => 'IndividualController@create']);
        $router->post('/{individual}/update', ['uses' => 'IndividualController@update']);
        $router->delete('/{individual}/delete', ['uses' => 'IndividualController@delete']);
    });
});
