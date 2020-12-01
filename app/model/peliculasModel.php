<?php
require_once 'app/controller/peliculasController.php';

class PeliculasModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_peliculas;charset=utf8','root','');
    }
    function getPeliculas($genero = null){
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

    public function getPelicula($id = null){
        if($id != null){
            $query=$this->db->prepare("SELECT * FROM pelicula WHERE id_pelicula=?");
            $query->execute(array($id));
            $rowPelicula=$query->fetchAll(PDO::FETCH_OBJ);
            return $rowPelicula;
        }
    }

    public function borrarPelicula($id = null){
        $query= $this->db->prepare("DELETE FROM pelicula WHERE id_pelicula=?");
        $query->execute(array($id));
    }

    public function insertarPelicula(){
          $query = $this->db->prepare("INSERT INTO pelicula(nombre, descripcion, precio, id_genero) VALUES(?,?,?,?)");
          $query->execute(array($_POST["nombre"],$_POST["descripcion"],$_POST["precio"],$_POST["id_genero"]));
    }

    public function editarPelicula($id){
        $query = $this->db->prepare("UPDATE pelicula SET nombre=?, descripcion=?, precio=?, id_genero=? WHERE id_pelicula=?");
        $query->execute(array($_POST["nombre"],$_POST["descripcion"],$_POST["precio"],$_POST["id_genero"],$id));
    }
}
