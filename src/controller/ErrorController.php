<?php


namespace App\controller;


class ErrorController extends AbstractController
{
public function notFound(){
    echo $this->container->getTwig()->render('/errors/404.html.twig');
}
}