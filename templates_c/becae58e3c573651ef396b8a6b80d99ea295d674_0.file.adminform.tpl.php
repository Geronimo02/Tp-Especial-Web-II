<?php
/* Smarty version 4.2.1, created on 2022-10-16 20:02:15
  from 'C:\xampp\htdocs\TP\tp\templates\adminform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c472707b569_37320901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'becae58e3c573651ef396b8a6b80d99ea295d674' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP\\tp\\templates\\adminform.tpl',
      1 => 1665943332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634c472707b569_37320901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action='modify/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' method="POST">
  <div class="mb-3">
    <label  class="form-label">Nombre Del libro</label>
    <input type="Text" class="form-control" name="nombre">
  </div>
  <div class="mb-3">
    <label  class="form-label">Precio</label>
    <input type="Text" class="form-control" name="precio">
  </div>
  <button type="submit" class="btn btn-primary" >Submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
