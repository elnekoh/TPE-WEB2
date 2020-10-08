<?php
require_once 'app/controller/peliculasController.php';
require_once 'routerClass.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$router= new Router();

//rutas
$router->addRoute("peliculas/:GENERO", "GET", "peliculasController", "mostrarpeliculas");
$router->addRoute("peliculas", "GET", "peliculasController", "mostrarPeliculas"); // (url,verb,controller,method)

//ruta por defecto
$router->setDefaultRoute("peliculasController", "mostrarHome");


$router->route($_GET['action'], $_SERVER['REQUEST_METHOD']);