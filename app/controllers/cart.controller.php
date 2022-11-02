<?php
require_once 'app/controller/books.controller.php';
require_once 'app/models/cart.model.php';
require_once 'app/view/ApiCartview.php';

class Cartcontroller{
    private $model;
    private $view;
    private $data;

    public function __construct(){
        $this->model = new Cartsmodel();
        $this->view = new  ApiCartview();
    }

    function Showcart(){
        $libros= $this ->model ->getbook();
        $this-> view -> response($libros);
        
    }
    function Addcart(){
       $bookscontroller = new Bookscontroller();
       $libro = $bookscontroller->getbook();
       $this->view->response($libro);       
    }

    function deletebooks($id){
        $this->model->deletebookById($id);
    }

}

?>