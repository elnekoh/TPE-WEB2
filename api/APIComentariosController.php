<?php
require_once './app/model/comentariosModel.php';
require_once './api/APIView.php';
require_once './api/APIController.php';

class APIComentariosController extends APIController{

    function __construct(){
        parent::__construct();
        $this->model = new ComentariosModel();
    }

    public function getAllComentarios(){
        $comentarios = $this->model->getAllComentarios();
        $this->view->response($comentarios,200);
    }


    //obtiene comentarios por id
    public function getComentario($params = null){
        if($params!=null){
            $id = $params[":ID"];
            $comentario = $this->model->getComentario($id);
            if($comentario != false){
                $this->view->response($comentario,200);
            }else{
                $this->view->response("El comentario no existe",404);
            }
        }
    }


    //obtiene comentarios por id de pelicula
    public function getComentarios($params = null){
        if($params!=null){
            $id = $params[":ID"];
            $comentario = $this->model->getComentarios($id);
            if($comentario != false){
                $this->view->response($comentario,200);
            }else{
                $this->view->response("El comentario no existe",404);
            }
        }
    }

    public function deleteComentario($params = null){
        if($params!=null){
            $id = $params[":ID"];
            $rowCount = $this->model->borrarComentario($id);
            if($rowCount > 0 ){
                $this->view->response("Comentario borrado",200);
            }else{
                $this->view->response("El comentario no existe",404);
            }
        }
    }

    public function insertarComentario(){
        $body = $this->getData();
        $ultimoID = $this->model->insertarComentario($body->contenido,$body->id_user,$body->id_pelicula,$body->puntuacion);

        if (!empty($ultimoID)){
            $this->view->response( $this->model->getComentario($ultimoID), 201);
        }else{
            $this->view->response("El comentario no se pudo insertar", 404);
        }
    }

    public function editarComentario($params = null){
        if($params!=null){
            $body = $this->getData();
            $id = $params[":ID"];
            $comentario= $this->getComentario($id);
        }
        if (empty($comentario)) {
            $this->view->response("El comentario no existe", 404);
        }else {
            $ultimoID = $this->model->editarComentario($body->contenido,$id);
            if($ultimoID > 0){
                $this->view->response($this->model->getComentario($id), 200);
            }
            else{
                $this->view->response("El comentario no fue actualizado", 204);
            }
        }
    }
}