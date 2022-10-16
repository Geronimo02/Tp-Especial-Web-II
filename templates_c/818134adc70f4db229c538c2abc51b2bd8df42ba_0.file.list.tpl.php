<?php
/* Smarty version 4.2.1, created on 2022-10-16 17:02:13
  from 'C:\xampp\htdocs\TP\tp\templates\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c1cf51df586_73770620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '818134adc70f4db229c538c2abc51b2bd8df42ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP\\tp\\templates\\list.tpl',
      1 => 1665932530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634c1cf51df586_73770620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>

 <div class="col-md-3">

    <div class="card">

        <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['libro']->value->imagen;?>
"  >
        <div class="card-body">
            <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
</h4>
            <?php if ((isset($_SESSION['IS_LOGGED']))) {?>
            <a type="submit"class="btn btn-primary" href="Agregaralcarrito/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
" >Agregar </a>
        <?php }?>
        <?php if ($_SESSION['IS_ADMIN']) {?>
        <a class="btn btn-primary" href="form/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
">Modificar</a>
        <?php }?>
        </div>
    </div>  
</div>   
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
