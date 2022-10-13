<?php
/* Smarty version 4.2.1, created on 2022-10-13 23:46:57
  from 'C:\xampp\htdocs\web2\practico3\templates\stockview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348875129c9a2_56895695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9af552eacef99a2c8cd40093379c8d3248aaf79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\stockview.tpl',
      1 => 1665697218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6348875129c9a2_56895695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <p class="fw-bold"> Listado de Categorias: </p>
    <table class="table">  
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
$_smarty_tpl->tpl_vars['tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->do_else = false;
?>
            <tr>
              <td value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_envase;?>
"><?php echo $_smarty_tpl->tpl_vars['tipo']->value->envase;?>
</td>
            </td>
            <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 
    </table>   
</div>   

<div>
    <p class="fw-bold">Filtrar por:</p>
    <select class="form-select" name="type_option">
        <option selected>ver todas</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
$_smarty_tpl->tpl_vars['tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_envase;?>
"><?php echo $_smarty_tpl->tpl_vars['tipo']->value->envase;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
    </select>
</div>
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
        <?php } elseif ($_smarty_tpl->tpl_vars['coca']->value->envase === 2) {?>1 Litro</td>
        <?php } else { ?>3 Litro</td>
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
