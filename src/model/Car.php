<?php


namespace App\model;


class Car
{
    private $id;
    private $maker;
    private $model;

    ////////GETTERS////////////////////////

    /**
     * @return int id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string maker
     */
    public function getMaker()
    {
        return $this->maker;
    }

    /**
     * @return string model
     */
    public function getModel()
    {
        return $this->model;
    }


    ////////SETTERS////////////////////////

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $maker
     */
    public function setMaker($maker)
    {
        $this->maker = $maker;
    }

    /**
     * @param string $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }
}