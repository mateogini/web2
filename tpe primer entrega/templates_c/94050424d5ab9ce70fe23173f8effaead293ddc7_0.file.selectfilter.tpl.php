<?php
/* Smarty version 4.2.1, created on 2022-10-15 01:56:53
  from 'C:\xampp\htdocs\web2\practico3\templates\selectfilter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349f7459b03b6_49938107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94050424d5ab9ce70fe23173f8effaead293ddc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\selectfilter.tpl',
      1 => 1665791812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349f7459b03b6_49938107 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
<p class="fw-bold"> Listado de Categorias: </p>
<table class="table">  
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['tipos']->value->envase_name;?>
</td>
        </tr>
</table>   
</div>   
<?php }
}
