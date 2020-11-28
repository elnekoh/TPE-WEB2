<?php
require_once "app/model/peliculasModel.php";
require_once "app/model/generosModel.php";
require_once 'app/view/peliculasView.php';

class PeliculasController{
    private $peliculasModel;
    private $generosModel;
    private $view;

    public function __construct(){
        $this->peliculasModel = new PeliculasModel();
        $this->generosModel = new GenerosModel();
        $this->view = new PeliculasView();
    }

    private function checkLoggedInAdmin(){
        session_start();
        if(!isset($_SESSION["ROL"])){
            header("Location: ".LOGIN);
            die();
        }else{
            if($_SESSION["ROL"]!= "admin"){
                header("Location: ".BASE_URL);
                die();
            }
        }
    }

    
    public function mostrarpeliculas($params = null){
        $genero = $params[":GENERO"];
        $peliculas=$this->peliculasModel->getPeliculas($genero);
        $generos=$this->generosModel->getGeneros();
        $this->view->renderPeliculas($peliculas,$generos);
    }
    
    public function mostrarGeneros(){
        $generos=$this->generosModel->getGeneros();
        $this->view->renderGeneros($generos);
    }

    public function mostrarItem($params = null){
        //traer la peli
        $id=$params[":ID"];
        $pelicula=$this->peliculasModel->getPelicula($id);
        //mostrar la peli
        $this->view->renderItem($pelicula);
    }

    public function mostrarPeliculasAdmin(){
        $this->checkLoggedInAdmin();
        $peliculas=$this->peliculasModel->getPeliculas();
        $generos=$this->generosModel->getGeneros();
        $this->view->renderPeliculasAdmin($peliculas,$generos);
    }

    public function mostrarGenerosAdmin(){
        $this->checkLoggedInAdmin();
        $generos=$this->generosModel->getGeneros();
        $this->view->renderGenerosAdmin($generos);
    }

    public function borrarPelicula($params = null){
        $this->checkLoggedInAdmin();
        $id=$params[":ID"];
        $this->peliculasModel->borrarPelicula($id);
        $this->view->ShowHomeLocation();
    }

    public function insertarPelicula(){
        $this->checkLoggedInAdmin();
        $this->peliculasModel->insertarPelicula();
        $this->view->ShowHomeLocation();
    }

    public function insertarGenero(){
        $this->checkLoggedInAdmin();
        $this->generosModel->insertarGenero();
        $this->view->ShowHomeLocation();
    }

    public function mostrarEditarPelicula($params=null){
        $this->checkLoggedInAdmin();
        $id=$params[":ID"];
        $generos=$this->generosModel->getGeneros();
        $this->view->renderEditarPelicula($id,$generos);
    }

    public function editarPelicula($params=null){
        $this->checkLoggedInAdmin();
        $id=$params[":ID"];
        $this->peliculasModel->editarPelicula($id);
        $this->view->ShowHomeLocation();
    }

    public function mostrarEditarGenero($params = null){
        $this->checkLoggedInAdmin();
        $id=$params[":ID"];
        $this->view->renderEditarGeneros($id);
    }

    public function editarGenero($params = null){
        $this->checkLoggedInAdmin();
        $id=$params[":ID"];
        $this->generosModel->editarGenero($id);
        $this->view->ShowHomeLocation();
    }

    public function borrarGenero($params = null){
        $this->checkLoggedInAdmin();
        $id = $params[":ID"];
        $this->generosModel->borrarGenero($id);
        $this->view->ShowHomeLocation();
    }

}