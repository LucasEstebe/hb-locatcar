<?php


namespace App\Controller;



class CarsController extends AbstractController
{

 public function index() {
     $cars = $this->container->getCarManager()->findAll();

     echo $this->container->getTwig()->render('/cars/index.html.twig', ['cars' => $cars]);
 }
}