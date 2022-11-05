<?php
require_once './app/models/book-Api-Model.php';
require_once './app/view/ApiView.php';
require_once './app/controllers/auth-Api-controller.php';
require_once './app/helper/auth-Api-helper.php';

class booksController{
    private $model;
    private $view;
    private $data;
    private $authapiHelper;

    public function __construct(){
        $this->model = new Booksmodel();
        $this->view = new  ApiBooksview();
        $this->authapiHelper = new AuthApiHelper();
        $this->data = file_get_contents("php://input"); 
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
        $libros = $this ->model ->getbook($id);
        // si no existe devolver 404 
        if ($libros)
            $this-> view->response($libros);
            else
            $this-> view->response('el libro ingresado no se encuentra disponible', 404);
        }

        public function deletebook($params = null) {
            $id = $params[':ID'];
           
            if(!$this->authapiHelper->isLoggedIn()){
                $this->view->response("No estas logeado", 401);
                return;
            }
    
            $libros = $this->model->getbook($id);
            if ($libros) {
                $this->model->delete($id);
                $this->view->response($libros);
            } else 
                $this->view->response("el libro con el id=$id no existe", 404);
        }
        public function insertbook($params = null){
           
            if(!$this->authapiHelper->isLoggedIn()){
                $this->view->response("No estas logeado", 401);
                return;
            }
           
            $libros = $this->getData();

            if ( empty($libros->id_libro)|| empty($libros->imagen) || empty($libros->nombre) || empty($libros->precio)) {
                $this->view->response("Complete los datos", 400);
            }
             else{
                $id = $this->model->insertBook($libros->id_libro,$libros->imagen,$libros->nombre, $libros->precio);
                 $libros= $this ->model ->getbook($id);
                 $this->view->response($libros,201);
         }
        }

         public function UpdateBook($params= null){
            $id = $params [':ID'];
            if(!$this->authapiHelper->isLoggedIn()){
                $this->view->response("No estas logeado", 401);
                return;
            }
            $libro = $this->model->getbook($id);
            $Newbook = $this->getData();
             if($libro){
                 $this->model->updateBook($Newbook->imagen, $Newbook->nombre, $Newbook->precio,$id);
                 $this->view->response("el libro se modifico con exito", 200);
             }else{
                 $this->view->response("el libro con la id=$id no existe",404);
             }
         }
     }

?>