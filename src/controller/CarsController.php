<?php


namespace App\Controller;


class CarsController
{


 public function index() {
     $cars = [
                 [
                     "brand" => "Ford",
                     "model" => "Fiesta"
                 ],
                 [
                     "brand" => "Fiat",
                     "model" => "600"
                 ],
            ];
     include __DIR__ . "/../../template/cars/index.php";
 }
}