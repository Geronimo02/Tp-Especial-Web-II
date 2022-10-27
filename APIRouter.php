<?php
require_once 'libs/Router.php';
require_once './app/controllers/books.controller.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('libros', 'GET', 'bookscontroller', 'Showbooks');
//$router->addRoute('libros', 'POST', 'books.controlle', 'crearTarea');
//$router->addRoute('libros/:ID', 'GET', 'books.controlle', 'obtenerTarea');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);


?>