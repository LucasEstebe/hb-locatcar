<?php


namespace App\model;



class Rental
{
    private $id;
    private $startDate;
    private $duration;
    private $dailyPrice;
    private $car;
    private $user;



    /**
     * @return Car
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * @param Car $car
     */
    public function setCar($car): void
    {
        $this->car = $car;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return int rental id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
    /**
     * @return string $startDate
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     */
    public function setStartDate(string $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return int duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return int $dailyPrice
     */
    public function getDailyPrice()
    {
        return $this->dailyPrice;
    }

    /**
     * @param int $dailyPrice
     */
    public function setDailyPrice(int $dailyPrice): void
    {
        $this->dailyPrice = $dailyPrice;
    }
}