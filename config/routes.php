<?php

$router = $container->getRouter();

$router->setNamespace('App\Controller');
$router->set404('ErrorController@notFound');
$router->get('/cars','CarsController@index');
$router->get('/cars/(\d+)','CarsController@show');
$router->get('/users','UsersController@index');

$router->run(); # À ne jamais oublier sinon le routeur ne se lance pas !