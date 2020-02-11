<?php


namespace App\Controller;


use App\Service\ServiceContainer;

class CarsController
{

 public function index() {

     include __DIR__ . "/../../template/cars/index.php";
 }
}