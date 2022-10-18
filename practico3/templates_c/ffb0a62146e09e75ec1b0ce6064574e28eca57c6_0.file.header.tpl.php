<?php
/* Smarty version 4.2.1, created on 2022-10-18 00:00:57
  from 'C:\xampp\htdocs\web2\practico3\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dd0992b66b5_20376908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffb0a62146e09e75ec1b0ce6064574e28eca57c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\header.tpl',
      1 => 1666044055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dd0992b66b5_20376908 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo '<?php'; ?>
 echo BASE_URL <?php echo '?>'; ?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tpe.css">
    <title>Cocas</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo BASE_URL;?>
/home">Coca Cola Distribuidor</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL;?>
/home">Home</a>
        </li>
        <?php if ((isset($_SESSION['USER_EMAIL']))) {?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL;?>
/addcategory">Añadir Categoria</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL;?>
/add">Añadir Producto</a>
        </li>
        <?php }?>
      </ul>
    </div>
  </div>
  <?php if (!(isset($_SESSION['USER_ID']))) {?>
    <a button type="button" class="btn btn-primary btn-sm"  href="login">Login</button> </a>
  <?php } else { ?> 
      <a button type="button" class="btn btn-primary btn-sm"  href="logout">Logout (<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
  <?php }?>
</nav>
    </header>
    </body><?php }
}
