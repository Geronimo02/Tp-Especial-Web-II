<?php
/* Smarty version 4.2.1, created on 2022-10-16 19:06:20
  from 'C:\xampp\htdocs\TP\tp\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c3a0c28b267_82699831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1ca310d7dc4cc1e31621d3823916022a3dacbed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP\\tp\\templates\\header.tpl',
      1 => 1665939976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c3a0c28b267_82699831 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
  <head>
    <base href="'.BASE_URL.'">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <header>
     <nav class="navbar navbar-expand navbar-dark bg-primary">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="list">Productos</a>
            <?php if (!(isset($_SESSION['IS_LOGGED']))) {?>
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="login">Login</a>
            </li>
             
            <?php } else { ?> 
              <li class="nav-item active">
              <a class="nav-link" href="cart">Carrito</a>
              </li>
              <li class="nav-item ml-auto">
                <a class="nav-link" aria-current="page" href="logout">Logout</a>
              </li>
            <?php }?>
        </ul>
     </nav>
    </header>      
    <div class="container">
        <div class="row"><?php }
}
