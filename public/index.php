<?php
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;

$router = new Router();

// Definir rutas
$router->get('/', function () {
    echo "Bienvenido a la página de inicio";
});

// Comprobar y ejecutar las rutas
$router->comprobarRutas();