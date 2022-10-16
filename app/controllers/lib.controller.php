<?php 
require_once 'app/models/lib.model.php';
require_once 'app/view/lib.view.php';
require_once 'app/helper/auth.helper.php';
    class libController {
     private $model;
     private $view;  
     private $helper;
     
     public function __construct(){
         $this->helper = new AuthHelper();  
         $this->model = new libModel();
         $this->view = new LibView($this->helper->getUser());
     }  
     //mostrar la bse de datos de los libros osea los productos 
     public function Showlib(){
        $libros = $this->model->getList();
        $this-> view->Showlib($libros);

     }
   //añadir libros al carrito    
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