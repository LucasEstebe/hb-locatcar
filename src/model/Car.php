<?php


namespace App\model;


class Car
{
    private $id;
    private $brand;
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
     * @return brand
     */
    public function getBrand()
    {
        return $this->brand;
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
     * @param string $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @param string $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }
}