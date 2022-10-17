<?php
/* Smarty version 4.2.1, created on 2022-10-17 22:11:33
  from 'C:\xampp\htdocs\web2\practico3\templates\stockview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634db6f5df4703_05114767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9af552eacef99a2c8cd40093379c8d3248aaf79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\stockview.tpl',
      1 => 1666037472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634db6f5df4703_05114767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">
<thead>
<th> Listado de categorias </th>
<th> Ver Por: </th>

<tbody> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
$_smarty_tpl->tpl_vars['tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->do_else = false;
?>
        <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['tipo']->value->envase_name;?>
</td>
        <td><a type="button" href="list/<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_envase;?>
" value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_envase;?>
"><?php echo $_smarty_tpl->tpl_vars['tipo']->value->envase_name;?>
</a></td>
        <?php if ((isset($_SESSION['USER_EMAIL']))) {?>
            <td><a href="deletecat/<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_envase;?>
" type="button" class="btn btn-outline-danger"value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_envase;?>
">Borrar </a></td>
        <?php }?>
        

        </tr> 
    </tbody>    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<table class="table">
<thead>
<tr>
    <th scope='col'> Coca Cola </th>
    <th scope='col'> Envase</th>
     <th scope='col'> Detalle</th>
</tr>
</thead>
<tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cocacola']->value, 'coca');
$_smarty_tpl->tpl_vars['coca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['coca']->value) {
$_smarty_tpl->tpl_vars['coca']->do_else = false;
?>
        <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['coca']->value->tipo_coca;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['coca']->value->envase;?>
</td> 
        <td><a href="detalle/<?php echo $_smarty_tpl->tpl_vars['coca']->value->id_stock;?>
" type="button" class="btn btn-outline-dark"<?php echo $_smarty_tpl->tpl_vars['coca']->value->id_stock;?>
>Detalle</td> </a>
        <?php if ((isset($_SESSION['USER_EMAIL']))) {?>
        <td><a href="delete/<?php echo $_smarty_tpl->tpl_vars['coca']->value->id_stock;?>
" type="button" class="btn btn-outline-danger"<?php echo $_smarty_tpl->tpl_vars['coca']->value->id_stock;?>
>Borrar </td> </a>
        <td><a href="formedit/<?php echo $_smarty_tpl->tpl_vars['coca']->value->id_stock;?>
" type="button" class="btn btn-info">Editar</td> </a>
        <?php }?>
        </tr> 
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>

</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
