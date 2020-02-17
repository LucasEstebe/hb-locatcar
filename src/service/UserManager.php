<?php


namespace App\service;


use App\model\User;

class UserManager
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    /**
     * @return User[]
     */
    public function findAll(){
        $query = "SELECT * FROM user";
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        $data =  $statement->fetchAll(\PDO::FETCH_ASSOC);
        $users = [];
        foreach ($data as $d){
            array_push($users, $this->arrayToObject($d));
        }
        return $users;
    }

    /**
     * @param int $id
     * @return User
     */
    public function findOneById(int $id){
        $query = "SELECT * FROM user WHERE id = :id";
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
     * @param string field
     * @param string value
     * @return User[]
     */
    public function findByField(string $field, string $value){
    }


    /**
     * @param array $array
     * @return User
     */
    public function arrayToObject(array $array){
        $user = new User();
        $user->setId($array['id']);
        $user->setUsername($array['username']);
        $user->setPassword($array['password']);
        return $user;
    }
}