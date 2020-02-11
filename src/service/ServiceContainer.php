<?php
namespace App\Service;
use Bramus\Router\Router;

class ServiceContainer {
    private $router;
    private $pdo;
    private $configuration;


    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return mixed
     */
    public function getRouter() {
        if ($this->router === null) {
            $this->router = new Router;
        }
        return $this->router;
    }

    /**
     * @return PDO
     */
    public function getPdo()
    {
        if ($this->pdo === null){
            $this->pdo = new PDO($this->configuration['db']['dsn'],$this->configuration['db']['user'],$this->configuration['db']['pass']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
    }

}