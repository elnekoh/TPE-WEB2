<?php
require_once 'app/controller/peliculasController.php';

class ComentariosModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_peliculas;charset=utf8','root','');
    }

    public function getComentarios(){
        $query = $this->db->prepare('SELECT * FROM comentario');
        $query->execute();
        return $query->fetchALL(PDO::FETCH_OBJ);
    }

    public function getComentario($id){
        $query = $this->db->prepare('SELECT * FROM comentario WHERE id_comentario=?');
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function borrarComentario($id){
        $query = $this->db->prepare("DELETE FROM comentario WHERE id_user=?");
        $query->execute(array($id));
        return $query->rowCount();
    }

    public function insertarComentario($contenido,$id_user,$id_pelicula){
        $query = $this->db->prepare("INSERT INTO comentario(contenido, id_user, id_pelicula) VALUES(?,?,?)");
        $query->execute(array($contenido,$id_user,$id_pelicula));
        return $this->db->lastInsertId();
    }

    public function editarComentario($contenido, $id){
        $query = $this->db->prepare("UPDATE comentario SET contenido=? WHERE id_comentario=?");
        $query->execute(array($contenido,$id));
    }
}
