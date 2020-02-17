<?php


namespace App\service;


use App\model\Car;
use PDO;

class CarManager implements ManagerInterface
{
    private $pdo;

    /**
     * CarManager constructor.
     * @param PDO $pdo
     */
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
     * @return Car | bool
     */
    public function findOneById(int $id){
        $query = "SELECT * FROM car WHERE id = :id";
        $statement =  $this->pdo->prepare($query);
        $statement->execute([
            'id'          => $id,
        ]);
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        if(!$data){
            return $data;
        }
        return $this->arrayToObject($data);
    }

    /**
     * @param string field
     * @param string value
     * @return Car[]
     */
    public function findByField(string $field, string $value){
    }

    /**
     * @param string $maker
     * @param string $model
     */
    public function add(string $maker, string $model){
    $query = "INSERT INTO car(maker, model) VALUES (:maker,:model)";
    $statement = $this->pdo->prepare($query);
    $statement->execute([
        'maker' => $maker,
        'model' => $model,
    ]);
    return;
    }

    /**
     * @param int $id
     */
    public function delete(int $id){
        $query = "DELETE FROM car WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->execute([
            'id' => $id,
        ]);
        return;
    }

    public function update(Car $car){
        $query = "UPDATE car SET maker = :maker, model = :model WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->execute([
            'maker' => $car->getMaker(),
            'model' => $car->getModel(),
            'id' => $car->getId()
        ]);
        return;
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