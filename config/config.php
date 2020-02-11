<?php


$configuration = [
    'db' => [
        'dsn'  => 'mysql:host=localhost;dbname=hblocatcars',
        'user' => 'root',
        'pass' => null,
        ]
];

require_once __DIR__ . '/../vendor/autoload.php';

$container = new \App\Service\ServiceContainer($configuration);

require_once __DIR__ . '/routes.php';
