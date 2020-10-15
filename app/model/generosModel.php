<?php
require_once 'app/controller/peliculasController.php';

class GenerosModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_peliculas;charset=utf8','root','');
    }

    public function getGeneros(){
        $query = $this->db->prepare("SELECT * FROM genero");
        $query->execute();
        $generos=$query->fetchAll(PDO::FETCH_OBJ);
        return $generos;
    }

    public function insertarGenero(){
        $query= $this->db->prepare("INSERT INTO genero(nombre) VALUES(?)");
        $query->execute(array($_POST["nombre"]));
    }

    public function editarGenero($id){
        $query = $this->db->prepare("UPDATE genero SET nombre=? WHERE id_genero = ?");
        $query->execute(array($_POST["nombre"],$id));
    }

    public function borrarGenero($id){
        $query = $this->db->prepare("DELETE FROM genero WHERE id_genero=?");
        $query->execute(array($id));
    }
}