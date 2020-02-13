<?php

$router = $container->getRouter();

$router->setNamespace('App\Controller');
$router->get('/cars','CarsController@index');
$router->get('/users','UsersController@index');

$router->run(); # À ne jamais oublier sinon le routeur ne se lance pas !