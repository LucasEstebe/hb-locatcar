<?php
use Bramus\Router\Router;

$router = $container->getRouter();

// Quand je vais sur "/hello", j'effectue l'action suivante, qui est définie
// dans la fonction anonyme notée juste après : function() { /* action */ }
$router->get('/hello', function() {
    echo "Hello world !";
});

$router->run(); # À ne jamais oublier sinon le routeur ne se lance pas !