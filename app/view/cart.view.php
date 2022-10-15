<?php 
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';

class CartView{
    private $smarty;

    public function __construct($user){
        $this->smarty = new Smarty();// inicializo Smarty
        $this->smarty->assign('user', $user);
    }
    function showcart($libros){
        $this->smarty->assign('libros', $libros);
        $this->smarty->display('cart.tpl');

    }
  

}


?>