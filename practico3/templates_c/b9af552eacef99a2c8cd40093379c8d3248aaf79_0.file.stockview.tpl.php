<?php
/* Smarty version 4.2.1, created on 2022-10-07 03:18:02
  from 'C:\xampp\htdocs\web2\practico3\templates\stockview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633f7e4aa0cf40_03248214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9af552eacef99a2c8cd40093379c8d3248aaf79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\stockview.tpl',
      1 => 1665105480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633f7e4aa0cf40_03248214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">
<thead>
<tr>
    <th scope='col'> Coca Cola </th>
     <th scope='col'> Envase</th>
     <th scope='col'> Detalle</th>
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
        <td> <?php if ($_smarty_tpl->tpl_vars['coca']->value->envase === 1) {?>Lata
        <?php } else { ?>1 Litro</td>
        <?php }?>
        <td><a href="detalle/<?php echo $_smarty_tpl->tpl_vars['coca']->value->id_stock;?>
" type="button" class="btn btn-outline-dark"<?php echo $_smarty_tpl->tpl_vars['coca']->value->id_stock;?>
>Detalle</td> </a>
        </tr> 
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    


</table><?php }
}
