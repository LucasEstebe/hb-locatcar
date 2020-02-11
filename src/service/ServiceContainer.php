<?php
namespace App\Service;
use Bramus\Router\Router;
use PDO;

class ServiceContainer {
    private $router;
    private $pdo;
    private $configuration;
    private $carManager;


    /**
     * ServiceContainer constructor.
     * @param array $configuration
     */
    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return CarManager
     */
    public function getCarManager(){
        if ($this->carManager === null) {
            $this->carManager = new CarManager($this->getPdo());
        }
        return $this->carManager;
    }

    /**
     * @return Router
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
            $this->pdo = new PDO(
                $this->configuration['db']['dsn'],
                $this->configuration['db']['user'],
                $this->configuration['db']['pass']
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
    }

}