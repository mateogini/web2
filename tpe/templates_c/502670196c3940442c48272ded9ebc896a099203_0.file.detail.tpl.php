<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:37:41
  from 'C:\xampp\htdocs\web2\tpe\templates\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e0365cca8e5_05926281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '502670196c3940442c48272ded9ebc896a099203' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\templates\\detail.tpl',
      1 => 1666051805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634e0365cca8e5_05926281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2> <?php echo $_smarty_tpl->tpl_vars['cocacolas']->value[0]->tipo_coca;?>
 </h2>
<p class="text-decoration-underline"> Este sabor,poseemos de stock <?php echo $_smarty_tpl->tpl_vars['cocacolas']->value[0]->stock;?>
 pack de 6  unidades</p>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
