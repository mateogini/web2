<?php
/* Smarty version 4.2.1, created on 2022-10-18 02:12:47
  from 'C:\xampp\htdocs\web2\practico3\templates\categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634def7f055af0_88867230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '230e3d9763b815ed89ed8525d511ebad4071f9bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\categoria.tpl',
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
function content_634def7f055af0_88867230 (Smarty_Internal_Template $_smarty_tpl) {
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
