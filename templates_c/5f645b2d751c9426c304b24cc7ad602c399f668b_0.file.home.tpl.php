<?php
/* Smarty version 4.2.1, created on 2022-10-05 23:17:22
  from 'C:\xampp\htdocs\TP\tp\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633df462384783_36351913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f645b2d751c9426c304b24cc7ad602c399f668b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP\\tp\\templates\\home.tpl',
      1 => 1665004612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_633df462384783_36351913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="row align-items-md-stretch">
    <div class="col-md-6">
        <div
            class="h-100 p-5 text-white bg-primary border rounded-3">
            <h2>Change the background</h2>
            <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then,
                mix and match with additional component themes and more.</p>
            <button class="btn btn-outline-primary" type="button">Example button</button>
        </div>
    </div>
    <div class="col-md-6">
        <div
            class="h-100 p-5 bg-primary border rounded-3">
            <h2>Add borders</h2>
            <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure
                to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both
                column's content for equal-height.</p>
            <button class="btn Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then,
                mix and match with additional component themes and more." type="button">Example button</button>
        </div>
    </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
