<?php


namespace App\model;


class Car
{
    private $id;
    private $maker;
    private $model;

    ////////GETTERS////////////////////////

    /**
     * @return id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return maker
     */
    public function getMaker()
    {
        return $this->maker;
    }

    /**
     * @return model
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