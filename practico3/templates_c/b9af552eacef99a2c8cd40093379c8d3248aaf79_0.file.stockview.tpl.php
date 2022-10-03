<?php
/* Smarty version 4.2.1, created on 2022-10-04 00:02:31
  from 'C:\xampp\htdocs\web2\practico3\templates\stockview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633b5bf7bc43c3_70792212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9af552eacef99a2c8cd40093379c8d3248aaf79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\stockview.tpl',
      1 => 1664834550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_633b5bf7bc43c3_70792212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
<thead>
<tr>
    <th scope='col'> Coca Cola </th>
     <th scope='col'> Envaseee </th>
</tr>
</thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cocacola']->value, 'coca');
$_smarty_tpl->tpl_vars['coca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['coca']->value) {
$_smarty_tpl->tpl_vars['coca']->do_else = false;
?>
        <tr>
        <td> <?php echo $_smarty_tpl->tpl_vars['coca']->value->tipo_coca;?>
</td>
        <td> <?php echo $_smarty_tpl->tpl_vars['coca']->value->id_stock;?>
</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
</table>
<?php }
}
