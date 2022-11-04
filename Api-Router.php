<?php
require_once './libs/Router.php';
require_once './app/controllers/books-Api-ontroller.php';
require_once './app/controllers/auth-Api-controller.php';


// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('libros', 'GET', 'booksController', 'Showbooks');
$router->addRoute('libros/:ID', 'GET', 'booksController', 'getbook');
$router->addRoute('libros/:ID', 'DELETE', 'booksController', 'deletebook');
$router->addRoute('libros', 'POST', 'booksController', 'insertbook'); 
$router->addRoute('libros/:ID', 'PUT', 'booksController', 'UpdateBook');

//agrego el router 
$router->addRoute("auth/token", 'GET', 'AuthApiController', 'getToken');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);


?>