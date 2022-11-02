<?php
require_once './libs/Router.php';
require_once './app/controllers/books.controller.php';
//require_once './app/controllers/cart.controller.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('libros', 'GET', 'booksController', 'Showbooks');
$router->addRoute('libros/:ID', 'GET', 'booksController', 'getbook');
$router->addRoute('libros/:ID', 'DELETE', 'booksController', 'deletebook');
$router->addRoute('libros', 'POST', 'booksController', 'insertbook'); 



// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);


?>