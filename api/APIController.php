<?php
require_once './app/model/comentariosModel.php';
require_once './api/APIView.php';

class APIController{
    protected $model;
    protected $view;

    private $data;

    public function __construct(){
        $this->data = file_get_contents("php://input");
        $this->view = new APIView();
    }

    public function getData(){
        return json_decode($this->data);
    }
}