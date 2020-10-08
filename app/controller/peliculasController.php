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

}