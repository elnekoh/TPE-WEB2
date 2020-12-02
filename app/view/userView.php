<?php
require_once "app/controller/userController.php";
require_once "./libs/smarty/Smarty.class.php";

class UserView {

    private $smarty;
    
    public function __construct(){
        $this->smarty = new Smarty();  
    }

    public function asignarRol(){
        if(!empty($_SESSION)){
            $rol = $_SESSION["ROL"];
        }else{
           $rol = "public";
        }
        $this->smarty->assign('rol', $rol);
    }
    
    public function renderLogin($mensaje= ""){
        session_start();
        $this->asignarRol();
        $this->smarty->assign("mensaje",$mensaje);
        $this->smarty->display("templates/login.tpl");
    }

    public function renderRegistro(){
        $this->asignarRol();
        $this->smarty->display("templates/registro.tpl");
    }

    public function renderUsuarios($usuarios){
        $this->asignarRol();
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->display("templates/adminUsuarios.tpl");
    }

    function ShowHomeLocation(){
        header("Location: ".BASE_URL."peliculas");
    }
}