<?php
require_once 'RouterClass.php';
require_once 'api/ApiPeliculasController.php';

// instacio el router
$router = new Router();

// armo la tabla de ruteo de la API REST
$router->addRoute('peliculas', 'GET', 'ApiPeliculasController', 'getPelicula');
$router->addRoute('peliculas/:ID', 'GET', 'ApiPeliculasController', 'getPelicula');
$router->addRoute('tareas/:ID', 'DELETE', 'ApiPeliculasController', 'deletePelicula');

$router->addRoute('peliculas', 'POST', 'ApiPeliculasController', 'insertarPelicula');


$router->addRoute('peliculas/:ID', 'PUT', 'ApiPeliculasController', 'editarPelicula');


 //run
 $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
