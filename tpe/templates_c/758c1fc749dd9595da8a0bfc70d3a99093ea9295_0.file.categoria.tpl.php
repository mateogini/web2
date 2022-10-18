<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:37:34
  from 'C:\xampp\htdocs\web2\tpe\templates\categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e035e7be3c0_30017873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '758c1fc749dd9595da8a0bfc70d3a99093ea9295' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\templates\\categoria.tpl',
      1 => 1666051966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634e035e7be3c0_30017873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>En este envase, poseemos</h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
if ($_smarty_tpl->tpl_vars['categoria']->value->tipo_coca != '') {?>
<ul>
<li><?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo_coca;?>
</li>
</ul>
<?php } else { ?>
<h3>No poseemos stock</h3>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
