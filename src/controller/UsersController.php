<?php


namespace App\controller;


class UsersController extends AbstractController
{
    public function index(){
        $users = $this->container->getUserManager()->findAll();

        echo $this->container->getTwig()->render('/users/index.html.twig', ['users' => $users]);
    }
}