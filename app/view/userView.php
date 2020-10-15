<?php
require_once "app/controller/userController.php";
require_once "./libs/smarty/Smarty.class.php";

class UserView {

    private $smarty;
    
    public function __construct(){
        $this->smarty = new Smarty();  
    }
    public function renderLogin($mensaje= ""){
        $this->smarty->assign("mensaje",$mensaje);
        $this->smarty->assign("isLoggin");
        $this->smarty->display("templates/login.tpl");
    }

    function ShowHomeLocation(){
        header("Location: ".BASE_URL."peliculas");
    }
}