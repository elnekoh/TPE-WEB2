<?php 
require_once 'app/controller/peliculasController.php';

$controller = new PeliculasController();
if(!empty($_GET["action"])){
    $action=$_GET["action"];
}else{
    $action="home";
}

$params=explode("/",$action);

switch($params[0]){
    case 'home':
        $controller->mostrarHome();
        break;
    case 'peliculas':
        $controller->mostrarPeliculas();
        break;
}