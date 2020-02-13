<?php
namespace App\Service;
use Bramus\Router\Router;
use PDO;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class ServiceContainer {
    private $router;
    private $pdo;
    private $configuration;
    private $carManager;
    private $userManager;
    private $twig;


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
     * @return UserManager
     */
    public function getUserManager(){
        if($this->userManager === null){
            $this->userManager = new UserManager($this->getPdo());
        }
        return $this->userManager;
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

    /**
     * @return Environment
     */
    public function getTwig(){
        if($this->twig === null){
            $loader = new FilesystemLoader(__DIR__.'/../../template');
            $twig = new Environment($loader);
            $twig->addGlobal('env', $this->configuration['env']);
            $this->twig = $twig;
        }
        return $this->twig;
    }

}