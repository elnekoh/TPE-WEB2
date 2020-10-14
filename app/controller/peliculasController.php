<?php
require_once "app/model/peliculasModel.php";
require_once 'app/view/peliculasView.php';

class PeliculasController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new PeliculasModel();
        $this->view = new PeliculasView();
    }

    public function mostrarpeliculas($params = null){
        $genero = $params[":GENERO"];
        $peliculas=$this->model->getPeliculas($genero);
        $this->view->renderPeliculas($peliculas);
    }
    
    public function mostrarHome(){
        $this->view->renderHome();
    }

    public function mostrarItem($params = null){
        //traer la peli
        $id=$params[":ID"];
        $pelicula=$this->model->getPelicula($id);
        //mostrar la peli
        $this->view->renderItem($pelicula);
    }

    public function mostrarPeliculasAdmin(){
        $peliculas=$this->model->getPeliculas();
        $generos=$this->model->getGeneros();
        $this->view->renderPeliculasAdmin($peliculas,$generos);
    }

    public function mostrarGenerosAdmin(){
        $generos=$this->model->getGeneros();
        $this->view->renderGenerosAdmin($generos);
    }

    public function borrarPelicula($params = null){
        $id=$params[":ID"];
        $this->model->borrarPelicula($id);
        $this->view->ShowHomeLocation();
    }

    public function insertarPelicula(){
        $this->model->insertarPelicula();
        $this->view->ShowHomeLocation();
    }

    public function insertarGenero(){
        $this->model->insertarGenero();
        $this->view->ShowHomeLocation();
    }

    public function mostrarEditarPelicula($params=null){
        $id=$params[":ID"];
        $generos=$this->model->getGeneros();
        $this->view->renderEditarPelicula($id,$generos);
    }

    public function editarPelicula($params=null){
        $id=$params[":ID"];
        $this->model->editarPelicula($id);
        $this->view->ShowHomeLocation();
    }

    public function mostrarEditarGenero($params = null){
        $id=$params[":ID"];
        $this->view->renderEditarGeneros($id);
    }

    public function editarGenero($params = null){
        $id=$params[":ID"];
        $this->model->editarGenero($id);
        $this->view->ShowHomeLocation();
    }

    public function borrarGenero($params = null){
        $id = $params[":ID"];
        $this->model->borrarGenero($id);
        $this->view->ShowHomeLocation();
    }

}