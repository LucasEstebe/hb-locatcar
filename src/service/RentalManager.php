<?php


namespace App\service;


use App\model\Rental;

class RentalManager extends AbstractManager
{
    private $pdo;

    /**
     * CarManager constructor.
     * @param \PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct();
        $this->pdo = $pdo;
    }

    /**
     * @return Rental[]
     */
    public function findAll(){
        $query = "SELECT * FROM rental";
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        $data =  $statement->fetchAll(\PDO::FETCH_ASSOC);
        $rentals = [];
        foreach ($data as $d){
            array_push($rentals, $this->arrayToObject($d));
        }
        return $rentals;
    }

    /**
     * @param int $id
     * @return Rental|mixed
     */
    public function findOneById(int $id){
        $query = "SELECT * FROM rental WHERE id = :id";
        $statement =  $this->pdo->prepare($query);
        $statement->execute([
            'id'          => $id,
        ]);
        $data = $statement->fetch(\PDO::FETCH_ASSOC);
        if(!$data){
            return $data;
        }
        return $this->arrayToObject($data);
    }

    /**
     * @param array $array
     * @return Rental
     */
    public function arrayToObject(array $array){
        $rental = new Rental();
        $rental->setId($array['id']);
        $rental->setUser($this->container->getUserManager()->findOneById($array['user_id']));
        $rental->setCar($this->container->getCarManager()->findOneById($array['car_id']));
        $rental->setStartDate($array['start_date']);
        $rental->setDuration($array['duration']);
        $rental->setDailyPrice($array['daily_price']);
        return $rental;
    }
}