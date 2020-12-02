<?php
require_once 'RouterClass.php';
require_once 'api/APIComentariosController.php';

// instacio el router
$router = new Router();

// armo la tabla de ruteo de la API REST
$router->addRoute('comentarios', 'GET', 'APIComentariosController', 'getAllComentarios');
$router->addRoute('comentarios/:ID', 'GET', 'APIComentariosController', 'getComentarios');
$router->addRoute('comentarios/:ID', 'DELETE', 'APIComentariosController', 'deleteComentario');

$router->addRoute('comentarios', 'POST', 'APIComentariosController', 'insertarComentario');


$router->addRoute('comentarios/:ID', 'PUT', 'APIComentariosController', 'editarComentario');


//run
$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
