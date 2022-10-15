<?php
/* Smarty version 4.2.1, created on 2022-10-08 17:35:18
  from 'C:\xampp\htdocs\TP\tp\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634198b63237b2_81984183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d6c82417c9732ec1996bede371eff2febb012ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP\\tp\\templates\\form.tpl',
      1 => 1665243287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634198b63237b2_81984183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--formulario-->
<form action="validate" method="POST" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">nombre</label>
    <input type="text" class="form-control" id="inputAddress"name="nombre">
  </div>
   
  <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
    <div class="alert alert-danger mt-3">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
    <?php }?>



  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
