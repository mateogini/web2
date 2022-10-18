<?php
/* Smarty version 4.2.1, created on 2022-10-18 02:58:34
  from 'C:\xampp\htdocs\web2\practico3\templates\formEditCat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dfa3a0e1e20_93445523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eed60774eeec7197f86b75052efd62fb3b7827db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\formEditCat.tpl',
      1 => 1666050671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dfa3a0e1e20_93445523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="<?php echo BASE_URL;?>
/editcategory" method= "POST">
<h2>Editar Categoria</h2>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tipos']->value->id_envase;?>
" name="id_envase">
<input type="text" class="form-control" id="exampleFormControlInput1" name="envase_name">
  <button type="submit" class="btn btn-outline-primary">Editar</button>
  </form>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
