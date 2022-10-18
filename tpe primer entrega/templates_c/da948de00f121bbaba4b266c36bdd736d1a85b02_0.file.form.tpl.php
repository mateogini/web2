<?php
/* Smarty version 4.2.1, created on 2022-10-18 02:58:20
  from 'C:\xampp\htdocs\web2\practico3\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dfa2c2e9192_16118339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da948de00f121bbaba4b266c36bdd736d1a85b02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\form.tpl',
      1 => 1666049978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dfa2c2e9192_16118339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="add" method= "POST">
   <div class="mb-3">
  <select class="form-select" maria-label="Default select example" name="tipo_coca">
    <option selected>Elegí tu Coca Cola</option>
    <option value="Sabor Original" name="tipo_coca">Sabor Original</option>
    <option value="Light"  name="tipo_coca">Light</option>
    <option value="Zero Azucar"  name="tipo_coca">Zero azúcar</option>
    <option value="Zero Cherry"  name="tipo_coca">Zero Cherry</option>
    <option value="Light Not Cafeina"  name="tipo_coca">Light sin cafeína</option>
    <option value="Energy"  name="tipo_coca">Energy</option>
    <option value="Energy Not Azucar"  name="tipo_coca">Energy sin azúcares</option>
    <option value="Energy Cherry"  name="tipo_coca">Energy Cherry</option>
  </select>
<select class="form-select" maria-label="Default select example" name="envase">
  <option selected>Elegi tu envase</option>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
$_smarty_tpl->tpl_vars['tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->do_else = false;
?>
  <option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_envase;?>
" name="envase"><?php echo $_smarty_tpl->tpl_vars['tipo']->value->envase_name;?>
</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<input type="text" class="form-control" id="exampleFormControlInput1" name="stock" placeholder="stock en packs de 6">
  <button type="submit" class="btn btn-outline-primary">Añadir</button>
</div>
  </form>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
