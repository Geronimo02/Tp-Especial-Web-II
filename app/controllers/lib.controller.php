<?php 
require_once 'app/models/lib.model.php';
require_once 'app/view/lib.view.php';
require_once 'app/helper/auth.helper.php';
    class libController {
     private $model;
     private $view;  
     
     public function __construct(){
         $this->helper = new AuthHelper();  
         $this->model = new libModel();
         $this->view = new LibView($this->helper->getUser());
     }  

     public function Showlib(){
        $libros = $this->model->getList();
        $this-> view->Showlib($libros);

     }
     function Addlib(){
        $imagen=$_REQUEST['imagen'];
        $nombre=$_REQUEST['nombre'];
        $precio=$_REQUEST['precio'];

        $id= $this->model->insertlist($imagen,$nombre,$precio);
        header("location:". BASE_URL);
     }

     function getlibro($id){
      return $this->model->getLibro($id);
      }   

     function showhome(){
      $this->view->showhome();

      }

      function showform($id){
         $this->view->showForm($id);
      }
      
      public function Modify($id){
         //Metodo encargado de modificar x producto
         $nombre=$_POST['nombre'];
         $precio=$_POST['precio'];
         $this->model->updatelibro($nombre,$precio,$id);
      
       
      }
         
    }
?>