<?php
// require_once 'app/controllers/books.controller.php';
// require_once 'app/models/cart.model.php';
// require_once 'app/view/Apicartview.php';

// class Cartcontroller{
//     private $model;
//     private $view;
//     private $data;

//     public function __construct(){
//         $this->model = new Cartsmodel();
//         $this->view = new  ApiCartview();
//         $this->data = file_get_contents("php://input");
//     }

//     function getData(){ 
//         return json_decode($this->data); 
//     }  

//     function Showcart(){
//         $libros= $this ->model ->getbook();
//         $this-> view -> response($libros);
        
//     }
//     function Addcart($params = null){
//         $libros = $this->getData();

//         if (empty($libros->nombre) || empty($libros->precio) || empty($libros->imagen)) {
//             $this->view->response("Complete los datos", 400);
//         } else {
//             $id = $this->model->insertbook($libros->id_libro,$libros->nombre, $libros->precio, $libros->imagen);
//             $libros = $this->model->getbook($id);
//             $this->view->response($libros, 201);
//         }

        
//     }

//     function deletebooks($id){
//         $this->model->deletebookById($id);
//     }

//}

?>