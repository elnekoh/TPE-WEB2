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
}