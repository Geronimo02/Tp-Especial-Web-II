<?php
require_once './libs/Router.php';
require_once './app/controllers/books-Api-ontroller.php';
// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('libros', 'GET', 'booksController', 'Showbooks');
$router->addRoute('libros/:ID', 'GET', 'booksController', 'getbook');
$router->addRoute('libros/:ID', 'DELETE', 'booksController', 'deletebook');
$router->addRoute('libros', 'POST', 'booksController', 'insertbook'); 
$router->addRoute('libros/:ID', 'PUT', 'booksController', 'UpdateBook');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
?>