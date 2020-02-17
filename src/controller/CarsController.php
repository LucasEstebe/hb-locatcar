<?php


namespace App\Controller;



use App\model\Car;

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

     public function new(){
         echo $this->container->getTwig()->render('/cars/form.html.twig');
     }

     public function create(){
         $this->container->getCarManager()->add($_POST['maker'],$_POST['model']);
         $this->index();
     }
     public function delete(int $id){
         $this->container->getCarManager()->delete($id);
         $this->index();

     }
     public function edit(int $id){
         $car = $this->container->getCarManager()->findOneById($id);
         echo $this->container->getTwig()->render('/cars/form.html.twig', ['car' => $car]);
     }
     public function update(){
         $car = new Car();
         $car->setId($_POST['id']);
         $car->setMaker($_POST['maker']);
         $car->setModel($_POST['model']);
         $this->container->getCarManager()->update($car);
         $this->index();
     }
}