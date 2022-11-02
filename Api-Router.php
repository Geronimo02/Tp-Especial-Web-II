<?php
require_once './libs/Router.php';
require_once './app/controllers/books.controller.php';
require_once './app/controllers/cart.controller.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('libros', 'GET', 'bookscontroller', 'Showbooks');
//$router->addRoute('libros', 'POST', 'bookscontroller', 'modify');
$router->addRoute('libros/:ID', 'GET', 'bookscontroller', 'getbooks');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);


?>