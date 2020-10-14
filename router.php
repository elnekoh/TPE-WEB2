<?php
require_once 'app/controller/peliculasController.php';
require_once 'routerClass.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$router= new Router();

//rutas
$router->addRoute("peliculas/:GENERO", "GET", "peliculasController", "mostrarpeliculas"); // (url,verb,controller,method)
$router->addRoute("pelicula/:ID", "GET", "peliculasController", "mostrarItem");//PELICULA != PELICULAS
$router->addRoute("peliculas", "GET", "peliculasController", "mostrarPeliculas");
$router->addRoute("admin/peliculas", "GET", "peliculasController", "mostrarPeliculasAdmin");
$router->addRoute("admin/generos","GET","peliculasController","mostrarGenerosAdmin");
$router->addRoute("crear/pelicula","POST","peliculasController","insertarPelicula");
$router->addRoute("crear/genero","POST","peliculasController","insertarGenero");
$router->addRoute("borrar/pelicula/:ID", "GET", "peliculasController", "borrarPelicula");
$router->addRoute("borrar/genero/:ID","GET", "peliculasController","borrarGenero");
$router->addRoute("editar/pelicula/:ID", "GET", "peliculasController", "mostrarEditarPelicula");
$router->addRoute("editar/pelicula/sending/:ID", "POST", "peliculasController", "editarPelicula");
$router->addRoute("editar/genero/:ID","GET","peliculasController","mostrarEditarGenero");
$router->addRoute("editar/genero/sending/:ID", "POST", "peliculasController", "editarGenero");



//ruta por defecto
$router->setDefaultRoute("peliculasController", "mostrarPeliculas");


$router->route($_GET['action'], $_SERVER['REQUEST_METHOD']);