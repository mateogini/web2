<?php
/* Smarty version 4.2.1, created on 2022-10-08 22:48:24
  from 'C:\xampp\htdocs\web2\practico3\templates\formEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6341e218af3980_63822781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dd521386cd75379b7c1a1474775b7466086b5a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\formEdit.tpl',
      1 => 1665261627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6341e218af3980_63822781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
  <option value="1" name="envase">Lata</option>
  <option value="2"  name="envase">1 Litro</option>
  <option value="3"  name="envase">3 litros</option>
<input type="text" class="form-control" id="exampleFormControlInput1" name="stock" placeholder="stock en packs de 6">
  <button type="submit" href="edit/<?php echo $_smarty_tpl->tpl_vars['cocacolas']->value->{$_smarty_tpl->tpl_vars['id_stock']->value};?>
"  class="btn btn-outline-primary"> Editar</button>
</div>
  </form><?php }
}
