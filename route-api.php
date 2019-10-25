<?php
require_once("Router.php");
require_once("./api/TareasApiController.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$router = new Router();

// arma la tabla de ruteo
$router->addRoute("tareas", "GET", "TareasApiController", "getTareas");
$router->addRoute("tareas/:ID", "GET", "TareasApiController", "getTarea");

// rutea
$router->route($resource, $method);

