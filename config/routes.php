<?php

$router = $container->getRouter();

$router->setNamespace('App\Controller');
$router->set404('ErrorController@notFound');

//////////////////////////CARS//////////////////////////////////////
$router->get('/cars','CarsController@index');
$router->get('/cars/(\d+)/delete','CarsController@delete');
$router->get('/cars/(\d+)/edit','CarsController@edit');
$router->post('/cars/update','CarsController@update');
$router->get('/cars/(\d+)','CarsController@show');
$router->get('/cars/new', 'CarsController@new');
$router->post('/cars/create', 'CarsController@create');

//////////////////////////USERS//////////////////////////////////////
$router->get('/users','UsersController@index');


$router->run(); # À ne jamais oublier sinon le routeur ne se lance pas !