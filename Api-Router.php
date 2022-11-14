<?php
require_once './libs/Router.php';
require_once './app/controllers/books-Api-ontroller.php';
// crea el router
$router = new Router();

// define la tabla de ruteo
//Trae todos los libros 
$router->addRoute('libros', 'GET', 'booksController', 'Showbooks');
//libros por id
$router->addRoute('libros/:ID', 'GET', 'booksController', 'getbook');
//eliminar un libro
$router->addRoute('libros/:ID', 'DELETE', 'booksController', 'deletebook');
//insertbook
$router->addRoute('libros', 'POST', 'booksController', 'insertbook'); 
//modificar libro
$router->addRoute('libros/:ID', 'PUT', 'booksController', 'UpdateBook');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
?>