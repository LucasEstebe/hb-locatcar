<?php


namespace App\service;

use App\Service\ServiceContainer;

abstract class AbstractManager
{
    protected $container;
    protected $config;

    public function __construct()
    {
        global $container;
        $this->container = $container;

        global $configuration;
        $this->config = $configuration;
    }
}