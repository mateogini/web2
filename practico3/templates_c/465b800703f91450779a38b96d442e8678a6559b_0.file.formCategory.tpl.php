<?php
/* Smarty version 4.2.1, created on 2022-10-17 22:01:21
  from 'C:\xampp\htdocs\web2\practico3\templates\formCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634db491efb334_73576569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '465b800703f91450779a38b96d442e8678a6559b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\formCategory.tpl',
      1 => 1665973198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634db491efb334_73576569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="addcategory" method= "POST">
<h2>Categoria A añadir</h2>
<input type="text" class="form-control" id="exampleFormControlInput1" name="envase_name">
  <button type="submit" class="btn btn-outline-primary">Añadir</button>
  </form>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
