<?php
require_once "app/model/userModel.php";
require_once 'app/view/userView.php';

class UserController{
    private $model;
    private $view;


    public function __construct(){
        $this->model = new UserModel();
        $this->view = new UserView();
    }

    private function checkLoggedInAdmin(){
        session_start();
        if(!isset($_SESSION["ROL"])){
            header("Location: ".LOGIN);
            die();
        }else{
            if($_SESSION["ROL"]!= "admin"){
                header("Location: ".BASE_URL);
                die();
            }
        }
    }
    
    public function mostrarLogin(){
        $this->view->renderLogin();
    }


    public function verificarDatos(){
        $email=$_POST["email"];
        $password=$_POST["password"];

        if(isset($email)){
            //si hay mail
            $dbUser = $this->model->getUser($email);

            if(isset($dbUser) && $dbUser){
                //existe el email

                if(password_verify($password, $dbUser->password)){
                    //datos correctos!
                    session_start();
                    $_SESSION["EMAIL"] = $dbUser->email;
                    $_SESSION["ROL"] = $dbUser->rol;
                    $_SESSION["USER_ID"] = $dbUser->id_user;
                    $_SESSION["NOMBRE"] = $dbUser->nombre;
                    $this->view->ShowHomeLocation();
                }else{
                    $this->view->renderLogin("Contraseña incorrecta!");
                }

            }else{
                //no existe el mail en el db
                $this->view->renderLogin("Mail incorrecto!");
            }
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header("Location: ".LOGIN);
    }

    public function mostrarRegistro(){
        $this->view->renderRegistro();
    }

    public function registrarUsuario(){
        $this->model->insertarUsuario();
        $this->verificarDatos();
        header("Location: ".BASE_URL);
    }

    public function mostrarUsuarios(){
        $this->checkLoggedInAdmin();
        $usuarios= $this->model->getUsuarios();
        $this->view->renderUsuarios($usuarios);
    }

    public function hacerAdmin($params = null){
        $this->checkLoggedInAdmin();
        if($params != null){
            $id = $params[":ID"];
            $this->model->hacerAdmin($id);
            header("Location: ".BASE_URL."admin/usuarios");
        }
    }

    public function quitarAdmin($params = null){
        $this->checkLoggedInAdmin();
        if($params != null){
            $id = $params[":ID"];
            $this->model->quitarAdmin($id);
            header("Location: ".BASE_URL."admin/usuarios");
        }
    }
    
    public function borrarUsuario($params = null){
        $this->checkLoggedInAdmin();
        if($params != null){
            $id = $params[":ID"];
            $this->model->borrarUsuario($id);
            header("Location: ".BASE_URL."admin/usuarios");
        }
    }
}