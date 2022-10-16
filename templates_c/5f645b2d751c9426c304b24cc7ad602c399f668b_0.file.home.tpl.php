<?php
/* Smarty version 4.2.1, created on 2022-10-16 19:17:57
  from 'C:\xampp\htdocs\TP\tp\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c3cc5235766_34758833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f645b2d751c9426c304b24cc7ad602c399f668b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP\\tp\\templates\\home.tpl',
      1 => 1665940675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634c3cc5235766_34758833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
    </div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="./img/carosel1.jpeg" class="d-block w-100" >
  </div>
  <div class="carousel-item">
    <img src="./img/carosel2.jpeg" class="d-block w-100" >
  </div>
  <div class="carousel-item">
    <img src="./img/carosel3.jpeg" class="d-block w-100" >
  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>

    <div class="row align-items-md-stretch ">
    <div class="col-md-6">
        <div
            class="h-100 p-5 text-white bg-primary border rounded-3">
            <h2>Veta De Libros </h2>
            <p>e-commerce de Argentina especializado en la venta de libros en formato físico con envíos a todo el país y el mundo.
            Comenzamos centrándonos en la venta de libros escolares con el fin de facilitar 'la vuelta al cole' y poco a poco fuimos ampliando el catálogo</p>
        </div>
    </div>
    <div class="col-md-6">
        <div
            class="h-100 p-5 bg-primary border rounded-3">
            <h2>Como Comprar</h2>
            <ul>
                <li>Elegí los productos que vas a comprar</li>
                <li>Pagá con el medio de pago que quieras</li>
                <li>Recibí el producto que esperás</li>
            </ul>
        </div>
    </div>
    </div>
    
    <div class="card text-bg-dark">
  <img src="./img/coarosel 4.jpeg" class="card-img" >
  <div class="card-img-overlay">

  </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
