<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:37:28
  from 'C:\xampp\htdocs\web2\tpe\templates\stockview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e03587f1ea3_81647319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66214d10de17f2ccf3de5a0901d094acfd105bf9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\templates\\stockview.tpl',
      1 => 1666055859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634e03587f1ea3_81647319 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<table class="table table-dark table-striped">
<thead>
<th>N°</th>
<th>Listado de categorias </th>
<th>Ver Por: </th>
<?php if ((isset($_SESSION['USER_EMAIL']))) {?>
<th>Borrar </th>
<th>Editar</th>
<?php }?>

<tbody> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
$_smarty_tpl->tpl_vars['tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->do_else = false;
?>
        <tr>
        <td scope="col"><?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_envase;?>
</td>
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
            <td><a href="editcat/<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_envase;?>
" type="button" value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_envase;?>
" class="btn btn-info">Editar</td> </a>

        <?php }?>
        </tr> 
    </tbody>    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </table>
<table class="table">
<thead>
<tr class="table-danger">
    <th scope='col'> Coca Cola </th>
    <th scope='col'> Envase</th>
     <th scope='col'> Detalle</th>
     <?php if ((isset($_SESSION['USER_EMAIL']))) {?>
     <th>Borrar</th>
     <th>Editar</th>
    <?php }?>
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
