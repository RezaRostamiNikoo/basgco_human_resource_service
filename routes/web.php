<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(['prefix' => 'hr'], function () use ($router) {
    $router->group(['prefix' => 'individuals'], function () use ($router) {
        $router->get('/', ['uses' => 'IndividualController@index']);
        $router->get('/{individual}', ['uses' => 'IndividualController@detail']);
        $router->post('/create', ['uses' => 'IndividualController@create']);
        $router->post('/{individual}/update', ['uses' => 'IndividualController@update']);
        $router->delete('/{individual}/delete', ['uses' => 'IndividualController@delete']);
    });

    $router->group(['prefix' => 'jobs'], function () use ($router) {
        $router->get('/', ['uses' => 'JobController@index']);
        $router->get('/{job}', ['uses' => 'JobController@detail']);
        $router->post('/create', ['uses' => 'JobController@create']);
        $router->post('/{job}/update', ['uses' => 'JobController@update']);
        $router->delete('/{job}/delete', ['uses' => 'JobController@delete']);
    });

});
