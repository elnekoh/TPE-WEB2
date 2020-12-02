<?php
require_once "app/controller/peliculasController.php";
require_once "./libs/smarty/Smarty.class.php";


class PeliculasView {

    private $smarty;

    public function __construct(){
      $this->smarty = new Smarty(); 
    }

    function renderGeneros($generos){
      $this->smarty->assign('generos', $generos);
      $this->smarty->display('templates/tablaGeneros.tpl');
    }

    public function renderPeliculas($peliculas,$generos){
      $this->smarty->assign('peliculas', $peliculas);
      $this->smarty->assign('generos', $generos);
      $this->smarty->display('templates/tablaPelis.tpl');
    }

    public function renderItem($pelicula){
        session_start();
        if(!empty($_SESSION)){
          $rol = $_SESSION["ROL"];
          $nombre = $_SESSION["NOMBRE"];
          $id = $_SESSION["USER_ID"];
        }else{
          $rol = "public";
          $id = -1;
          $nombre = "";
        }
        $this->smarty->assign('rol', $rol);
        $this->smarty->assign('nombre', $nombre);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('pelicula', $pelicula);
        $this->smarty->display('templates/item.tpl');
    }

    public function renderPeliculasAdmin($peliculas,$generos){
      $this->smarty->assign('peliculas', $peliculas);
      $this->smarty->assign("generos", $generos);
      $this->smarty->assign("action","crear/pelicula");
      $this->smarty->assign('textoForm', "Crear nuevo");
      $this->smarty->display('templates/adminPeliculas.tpl');
    }

    public function renderGenerosAdmin($generos){
      $this->smarty->assign("generos",$generos);
      $this->smarty->assign("action","crear/genero");
      $this->smarty->assign('textoForm', "Crear nuevo");
      $this->smarty->display("templates/adminGeneros.tpl");
    }

    public function renderEditarPelicula($id,$generos){
      $this->smarty->assign("id_pelicula",$id);
      $this->smarty->assign("generos",$generos);
      $this->smarty->assign("action","editar/pelicula/sending/".$id);
      $this->smarty->assign('textoForm', "Editar");
      $this->smarty->display("templates/editarPelicula.tpl");
    }

    public function renderEditarGeneros($id){
      $this->smarty->assign("id_genero",$id);
      $this->smarty->assign("action","editar/genero/sending/".$id);
      $this->smarty->assign('textoForm', "Editar");
      $this->smarty->display("templates/editarGenero.tpl");
    }

    function ShowHomeLocation(){
      header("Location: ".BASE_URL."peliculas");
    }

}
       
            
