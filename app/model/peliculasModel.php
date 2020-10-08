<?php
require_once 'app/controller/peliculasController.php';

class PeliculasModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_peliculas;charset=utf8','root','');
    }
    function getPeliculas($genero){
        if($genero != null){
            $query = $this->db->prepare('SELECT * FROM genero WHERE nombre=?');
            $query->execute(array($genero));
            $rowGenero= $query->fetchAll(PDO::FETCH_OBJ);
            $query = $this->db->prepare("SELECT * FROM pelicula WHERE id_genero=?");
            $query->execute(array($rowGenero[0]->id_genero));
            $peliculas = $query->fetchAll(PDO::FETCH_OBJ);
            return $peliculas;
        }else{
            $query= $this->db->prepare('SELECT * FROM pelicula');
            $query->execute();
            $peliculas = $query->fetchAll(PDO::FETCH_OBJ);
            return $peliculas;
        }
    }
}
