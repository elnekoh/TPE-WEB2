<?php
require_once 'app/controller/userController.php';

class UserModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_peliculas;charset=utf8','root','');
    }

    public function getUser($email){
        $query = $this->db->prepare("SELECT * FROM user WHERE email=?");
        $query->execute(array($email));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function getUsuarios(){
        $query = $this->db->prepare("SELECT * FROM user");
        $query->execute();
        $usuarios = $query->fetchALL(PDO::FETCH_OBJ);
        return $usuarios;
    }

    public function insertarUsuario(){
        $query = $this->db->prepare("INSERT INTO user(email, nombre, password) VALUES(?,?,?)");
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $query->execute(array($_POST["email"],$_POST["nombre"],$password));
    }

    public function borrarUsuario($id = null){
        $query= $this->db->prepare("DELETE FROM user WHERE id_user=?");
        $query->execute(array($id));
    }

    public function hacerAdmin($id){
        $rol= "admin";
        $query = $this->db->prepare("UPDATE user SET rol=? WHERE id_user=?");
        $query->execute(array($rol,$id));
    }

    public function quitarAdmin($id){
        $rol= "usuario";
        $query = $this->db->prepare("UPDATE user SET rol=? WHERE id_user=?");
        $query->execute(array($rol,$id));
    }
}