<?php 
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';
class LibView{
    private $smarty;

    public function __construct($user){
        $this->smarty = new Smarty();// inicializo Smarty
        $this->smarty->assign('user', $user);
    }

    function Showlib($libros){
        $this->smarty->assign('libros',$libros);
        $this->smarty->display('list.tpl');
    }
    function Showhome(){
        $this ->smarty->display('home.tpl');

    }
    function showcart(){
        
        $this->smarty->display('cart.tpl');

    }

    function showForm($id){ 
        $this->smarty->assign('id',$id);

        $this ->smarty->display('adminform.tpl');
        
      }

}


?>