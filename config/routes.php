<?php

$router = $container->getRouter();

$router->setNamespace('App\Controller');

//////////////////////////ERRORS//////////////////////////////////////
$router->set404('ErrorController@notFound');

//////////////////////////CARS//////////////////////////////////////
/// LIST
$router->get('/cars','CarsController@index');
///DELETE
$router->get('/cars/(\d+)/delete','CarsController@delete');
///EDIT
$router->get('/cars/(\d+)/edit','CarsController@edit');
$router->post('/cars/update','CarsController@update');
///SHOW
$router->get('/cars/(\d+)','CarsController@show');
///ADD
$router->get('/cars/new', 'CarsController@new');
$router->post('/cars/create', 'CarsController@create');

//////////////////////////USERS//////////////////////////////////////
$router->get('/users','UsersController@index');

//////////////////////////RENTALS//////////////////////////////////////
/// LIST
$router->get('/rentals', 'RentalsController@index');
$router->get('/rentals/(\d+)/delete','RentalsController@delete');



$router->run(); # À ne jamais oublier sinon le routeur ne se lance pas !