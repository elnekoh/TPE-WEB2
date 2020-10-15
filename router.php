<?php
require_once 'app/controller/peliculasController.php';
require_once 'app/controller/userController.php';
require_once 'routerClass.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
define('LOGIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/login');
define('LOGOUT', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/logout');

$router= new Router();

//rutas
$router->addRoute("admin/peliculas", "GET", "peliculasController", "mostrarPeliculasAdmin");
$router->addRoute("admin/generos","GET","peliculasController","mostrarGenerosAdmin");
$router->addRoute("login","GET","userController","mostrarLogin");
$router->addRoute("verificar","POST","userController","verificarDatos");
$router->addRoute("logout","GET","userController","logout");
//crud peliculas
$router->addRoute("peliculas", "GET", "peliculasController", "mostrarPeliculas");
$router->addRoute("crear/pelicula","POST","peliculasController","insertarPelicula");
$router->addRoute("pelicula/:ID", "GET", "peliculasController", "mostrarItem");//PELICULA != PELICULAS
$router->addRoute("peliculas/:GENERO", "GET", "peliculasController", "mostrarpeliculas"); // (url,verb,controller,method)
$router->addRoute("editar/pelicula/:ID", "GET", "peliculasController", "mostrarEditarPelicula");
$router->addRoute("editar/pelicula/sending/:ID", "POST", "peliculasController", "editarPelicula");
$router->addRoute("borrar/pelicula/:ID", "GET", "peliculasController", "borrarPelicula");
//crud generos
$router->addRoute("crear/genero","POST","peliculasController","insertarGenero");
$router->addRoute("editar/genero/:ID","GET","peliculasController","mostrarEditarGenero");
$router->addRoute("editar/genero/sending/:ID", "POST", "peliculasController", "editarGenero");
$router->addRoute("borrar/genero/:ID","GET", "peliculasController","borrarGenero");
$router->addRoute("generos","GET", "peliculasController","mostrarGeneros");


//ruta por defecto
$router->setDefaultRoute("peliculasController", "mostrarPeliculas");


$router->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

//pass = user