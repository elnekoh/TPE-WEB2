<?php
require_once "app/controller/peliculasController.php";
require_once "./libs/smarty/Smarty.class.php";


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
       
            
