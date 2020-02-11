<?php


namespace App\controller;


use App\Service\ServiceContainer;

abstract class AbstractController
{
    protected $container;

    public function __construct()
    {
        global $container;
        $this->container = $container;
    }
}