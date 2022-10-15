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
        $categoria=$_REQUEST['categoria'];
        $precio=$_REQUEST['precio'];

        $id= $this->model->insertlist($imagen,$nombre,$categoria,$precio);
        header("location:". BASE_URL);
     }

     function getlibro($id){
      return $this->model->getLibro($id);
      }   

     function showhome(){
      $this->view->showhome();

      }
      public function Modify($id){
         //Metodo encargado de modificar x producto
         //$user = $this->userHelper->checkLoggedIn();
         //if($user){
         //    $nombre = $_POST['nombre'];
         //    $imagen = $_POST['imagen'];
         //    $precio = $_POST['precio'];
         //    $this->productoModel->updateProducto($nombre,$imagen,$precio);
         //    header("Location: " . BASE_URL. "adminform" . $id );
         //}
         $this->view->showForm($id);
      }
         
    }
?>