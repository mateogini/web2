<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:11:24
  from 'C:\xampp\htdocs\web2\practico3\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dfd3cb38781_45521516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddb491b6a2ea5ec30fbd46a298211941eff972fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\error.tpl',
      1 => 1666055480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634dfd3cb38781_45521516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div class= "alert alert-danger mt-3">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
<?php }
}
}
