<?php
require_once "app/controller/peliculasController.php";
require_once "./libs/smarty/Smarty.class.php";


class PeliculasView {

    private $smarty;

    public function __construct(){
      $this->smarty = new Smarty(); 
    }

    public function asignarRol(){
      if(!empty($_SESSION)){
        $rol = $_SESSION["ROL"];
      }else{
        $rol = "public";
      }
      $this->smarty->assign('rol', $rol);
    }

    function renderGeneros($generos){
      session_start();
      $this->asignarRol();
      $this->smarty->assign('generos', $generos);
      $this->smarty->display('templates/tablaGeneros.tpl');
    }

    public function renderPeliculas($peliculas,$generos){
      session_start();
      $this->asignarRol();
      $this->smarty->assign('peliculas', $peliculas);
      $this->smarty->assign('generos', $generos);
      $this->smarty->display('templates/tablaPelis.tpl');
    }

    public function renderItem($pelicula){
        session_start();
        $this->asignarRol();
        if(!empty($_SESSION)){
          $id = $_SESSION["USER_ID"];
        }else{
          $id = -1;
        }
        $this->smarty->assign('id', $id);
        $this->smarty->assign('pelicula', $pelicula);
        $this->smarty->display('templates/item.tpl');
    }

    public function renderPeliculasAdmin($peliculas,$generos){
      $this->asignarRol();
      $this->smarty->assign('peliculas', $peliculas);
      $this->smarty->assign("generos", $generos);
      $this->smarty->assign("action","crear/pelicula");
      $this->smarty->assign('textoForm', "Crear nuevo");
      $this->smarty->display('templates/adminPeliculas.tpl');
    }

    public function renderGenerosAdmin($generos){
      $this->asignarRol();
      $this->smarty->assign("generos",$generos);
      $this->smarty->assign("action","crear/genero");
      $this->smarty->assign('textoForm', "Crear nuevo");
      $this->smarty->display("templates/adminGeneros.tpl");
    }

    public function renderEditarPelicula($id,$generos){
      $this->asignarRol();
      $this->smarty->assign("id_pelicula",$id);
      $this->smarty->assign("generos",$generos);
      $this->smarty->assign("action","editar/pelicula/sending/".$id);
      $this->smarty->assign('textoForm', "Editar");
      $this->smarty->display("templates/editarPelicula.tpl");
    }

    public function renderEditarGeneros($id){
      $this->asignarRol();
      $this->smarty->assign("id_genero",$id);
      $this->smarty->assign("action","editar/genero/sending/".$id);
      $this->smarty->assign('textoForm', "Editar");
      $this->smarty->display("templates/editarGenero.tpl");
    }

    function ShowHomeLocation(){
      header("Location: ".BASE_URL."peliculas");
    }

}
       
            
