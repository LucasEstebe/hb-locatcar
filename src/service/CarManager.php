<?php


namespace App\service;


use App\model\Car;
use PDO;

class CarManager implements ManagerInterface
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @return Car[]
     */
    public function findAll(){
        $query = "SELECT * FROM car";
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        $data =  $statement->fetchAll(PDO::FETCH_ASSOC);
        $cars = [];
        foreach ($data as $d){
            array_push($cars, $this->arrayToObject($d));
        }
        return $cars;
    }

    /**
     * @param int $id
     * @return Car
     */
    public function findOneById(int $id){
    }

    /**
     * @param string field
     * @param string value
     * @return Car[]
     */
    public function findByField(string $field, string $value){
    }


    /**
     * @param array $array
     * @return Car
     */
    public function arrayToObject(array $array){
        $car = new Car();
        $car->setId($array['id']);
        $car->setMaker($array['maker']);
        $car->setModel($array['model']);
        return $car;
    }
}