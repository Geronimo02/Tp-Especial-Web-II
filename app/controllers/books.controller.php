<?php
require_once './app/models/bookModel.php';
require_once './app/view/ApiView.php';

class bookscontroller{
    private $model;
    private $view;
    private $data;

    public function __construct(){
        $this->model = new Booksmodel();
        $this->view = new  ApiBooksview();
    }
    private function getData() {
        return json_decode($this->data);
    }
    public function Showbooks() {
    $libros = $this ->model ->getlist();
    $this-> view -> response($libros);
    }

    public function getbook ($params = null) {
        //obtengo la id del arreglo de parametro
        $id = $params [':ID'];
        $libros = $this ->model ->getbooks($id);
        // si no existe devolver 404 
        if ($libros)
            $this-> view->response($libros);
            else
            $this-> view->response('el libro ingresado no se encuentra disponible', 404);
        }

}

?>