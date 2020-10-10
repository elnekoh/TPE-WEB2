<?php
require_once "app/controller/peliculasController.php";
require_once "./libs/smarty/Smarty.class.php";


class PeliculasView {

  private $smarty;
    public function __construct(){
      $this->smarty = new Smarty();   
    }

    function mostrarError(){
        echo "<h2> No se eligio genero </h2>";
    }

    function renderHome(){
      $this->smarty->display('templates/home.tpl');
    }

    public function renderPeliculas($peliculas){
      $this->smarty->assign('peliculas', $peliculas);
      $this->smarty->display('templates/tablaPelis.tpl');
    }

    public function renderItem($pelicula){
      $this->smarty->assign('pelicula', $pelicula);
      $this->smarty->display('templates/item.tpl');
    }
}
       
            
