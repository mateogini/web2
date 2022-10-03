<?php
/* Smarty version 4.2.1, created on 2022-09-30 23:12:04
  from 'C:\xampp\htdocs\web2\practico3\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63375ba4c2f592_26597078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faa86d5e6231b481d06e570c7c8bd871b6130848' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\admin.tpl',
      1 => 1664569656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63375ba4c2f592_26597078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>'<?php }
}
