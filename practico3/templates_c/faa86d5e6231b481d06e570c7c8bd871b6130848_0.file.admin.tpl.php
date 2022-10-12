<?php
/* Smarty version 4.2.1, created on 2022-10-12 18:49:30
  from 'C:\xampp\htdocs\web2\practico3\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6346f01ac4d3a7_88242657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faa86d5e6231b481d06e570c7c8bd871b6130848' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\admin.tpl',
      1 => 1665593344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6346f01ac4d3a7_88242657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <form method="POST" action="validate">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Log In</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com" name="email">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <a> <button type="submit" class="btn btn-primary">Login</button> </a>
    <div class= "alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
</form><?php }
}
