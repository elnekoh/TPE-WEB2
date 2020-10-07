<?php
require_once "app/controller/peliculasController.php";
require_once "./libs/smarty/Smarty.class.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
class PeliculasView {

    public function __construct(){
        
    }

    function mostrarError(){
        echo "<h2> No se eligio genero </h2>";
    }

    function renderHome(){
      $smarty = new Smarty();
      $smarty->display('templates/home.tpl');
    }

    public function renderPeliculas($peliculas){
      $smarty = new Smarty();
      $smarty->assign('peliculas', $peliculas);
      $smarty->display('templates/tablaPelis.tpl');
    }
}
       
            
