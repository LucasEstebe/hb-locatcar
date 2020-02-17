<?php


namespace App\controller;


class RentalsController extends AbstractController
{
    public function index() {
        $rentals = $this->container->getRentalManager()->findAll();

        echo $this->container->getTwig()->render('/rentals/index.html.twig', ['rentals' => $rentals]);
    }
    public function delete(int $id){
        $this->container->getRentalManager()->findOneById(1)->getCar()->setIsAvailable(true);
        $this->container->getCarManager()->update($this->container->getCarManager()->findOneById(5));
        dd($this->container->getCarManager()->findOneById(5));
    }
}