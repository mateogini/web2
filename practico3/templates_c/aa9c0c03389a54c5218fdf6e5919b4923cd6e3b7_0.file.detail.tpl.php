<?php
/* Smarty version 4.2.1, created on 2022-10-07 03:27:10
  from 'C:\xampp\htdocs\web2\practico3\templates\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633f806ecd8fc3_71347758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa9c0c03389a54c5218fdf6e5919b4923cd6e3b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\detail.tpl',
      1 => 1665106027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_633f806ecd8fc3_71347758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2> <?php echo $_smarty_tpl->tpl_vars['cocacolas']->value[0]->tipo_coca;?>
 </h2>
<p class="text-decoration-underline"> Este sabor, lo contemos en envase de tipo <?php if ($_smarty_tpl->tpl_vars['cocacolas']->value[0]->envase === 1) {?>Lata || <?php } else { ?> 1 Litro y poseemos de stock, <?php echo $_smarty_tpl->tpl_vars['cocacolas']->value[0]->stock;?>
 packs de 6</p>
  <?php }?>

<?php }
}
