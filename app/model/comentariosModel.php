<?php
require_once 'app/controller/peliculasController.php';

class ComentariosModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_peliculas;charset=utf8','root','');
    }

    public function getAllComentarios(){
        $query = $this->db->prepare('SELECT * FROM comentario');
        $query->execute();
        return $query->fetchALL(PDO::FETCH_OBJ);
    }


    //obtiene los comentarios POR ID DE PELICULA
    public function getComentarios($id){
        $query = $this->db->prepare('SELECT c.contenido, c.id_user, c.id_pelicula, c.puntuacion, u.nombre FROM comentario c INNER JOIN user u ON c.id_user=u.id_user AND id_pelicula=?');
        $query->execute(array($id));
        return $query->fetchALL(PDO::FETCH_OBJ);
    }

    //obtiene comentarios por ID
    public function getComentario($id){
        $query = $this->db->prepare('SELECT c.contenido, c.id_user, c.id_pelicula, c.puntuacion, u.nombre FROM comentario c INNER JOIN user u ON c.id_user=u.id_user AND id_comentario=?');
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function borrarComentario($id){
        $query = $this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
        $query->execute(array($id));
        return $query->rowCount();
    }

    public function insertarComentario($contenido,$id_user,$id_pelicula,$puntuacion){
        $query = $this->db->prepare("INSERT INTO comentario(contenido, id_user, id_pelicula, puntuacion) VALUES(?,?,?,?)");
        $query->execute(array($contenido,$id_user,$id_pelicula, $puntuacion));
        return $this->db->lastInsertId();
    }

    public function editarComentario($contenido, $id){
        $query = $this->db->prepare("UPDATE comentario SET contenido=? WHERE id_comentario=?");
        $query->execute(array($contenido,$id));
    }
}
