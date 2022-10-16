<?php
/* Smarty version 4.2.1, created on 2022-10-16 19:19:38
  from 'C:\xampp\htdocs\TP\tp\templates\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c3d2a6815a7_86878830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '868a5bbb8479bfffee1f7af55842c5ee97f17775' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP\\tp\\templates\\cart.tpl',
      1 => 1665940776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_634c3d2a6815a7_86878830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Carrito de compras </h1>
<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
   <li class="list-group-item">
<p ><?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre_libro;?>
 | $ <?php echo $_smarty_tpl->tpl_vars['libro']->value->Total;?>
</p> 
<a class="btn btn-danger" href="delete/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
">Borrar</a>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>


<?php }
}
