<?php


namespace App\Controller;



class CarsController extends AbstractController
{

 public function index() {
     $cars = $this->container->getCarManager()->findAll();

     echo $this->container->getTwig()->render('/cars/index.html.twig', ['cars' => $cars]);
 }

 public function show(int $id){
     $car = $this->container->getCarManager()->findOneById($id);

     echo $this->container->getTwig()->render('/cars/show.html.twig', ['car' => $car]);
 }
}