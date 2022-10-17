<?php
/* Smarty version 4.2.1, created on 2022-10-17 22:53:51
  from 'C:\xampp\htdocs\web2\practico3\templates\formEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dc0dfc91d77_86024580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dd521386cd75379b7c1a1474775b7466086b5a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\formEdit.tpl',
      1 => 1666040030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dc0dfc91d77_86024580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <form action="edit" method= "POST">
   <div class="mb-3">
   <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['cocacolas']->value->id_stock;?>
" name="id_stock">
  <select class="form-select" maria-label="Default select example" value="<?php echo $_smarty_tpl->tpl_vars['cocacolas']->value->tipo_coca;?>
" name="tipo_coca">
    <option name="tipo_coca">Sabor Original</option>
    <option   name="tipo_coca">Light</option>
    <option   name="tipo_coca">Zero azúcar</option>
    <option   name="tipo_coca">Zero Cherry</option>
    <option  name="tipo_coca">Light sin cafeína</option>
    <option   name="tipo_coca">Energy</option>
    <option   name="tipo_coca">Energy sin azúcares</option>
    <option   name="tipo_coca">Energy Cherry</option>
  </select>
<select class="form-select" value="<?php echo $_smarty_tpl->tpl_vars['cocacolas']->value->envase;?>
" maria-label="Default select example" name="envase">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipo']->value, 'tipos');
$_smarty_tpl->tpl_vars['tipos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipos']->value) {
$_smarty_tpl->tpl_vars['tipos']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['tipos']->value->id_envase;?>
" name="envase"><?php echo $_smarty_tpl->tpl_vars['tipos']->value->envase_name;?>
</option>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<input type="number"  value="<?php echo $_smarty_tpl->tpl_vars['cocacolas']->value->stock;?>
" class="form-control" id="exampleFormControlInput1" name="stock" placeholder="stock en packs de 6">
  <button type="submit" class="btn btn-outline-primary">Editar</button>
</div>
  </form>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
