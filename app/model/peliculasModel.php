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

/*
function GetPeliculasPorGenero($generoNombre){//le paso el nombre del genero que quiero
        $genero = $this->db->prepare("SELECT * FROM genero WHERE nombre=?");//todo de genero del nombre que quiero
        $genero->execute(array($generoNombre));//le asignamos ese nombre
        $arrGenero = $genero->fetchAll(PDO::FETCH_OBJ);//lo pedimos a la  base de datos

        //print_r($id_generos[0]->id_genero);//lo imprimimos para ver que tal
        $sentencia = $this->db->prepare("SELECT * FROM peliculas WHERE id_genero=?");//todo de pelicuas de un id_genero que quiero
        $sentencia->execute(array($arrGenero[0]->id_genero));//lo ejecuto y le paso el id que busco
        // print_r($sentencia->fetAll(PDO::FETCH_OBJ));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);   
    }
*/ 