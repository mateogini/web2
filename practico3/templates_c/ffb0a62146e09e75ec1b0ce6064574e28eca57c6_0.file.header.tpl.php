<?php
/* Smarty version 4.2.1, created on 2022-10-13 18:35:15
  from 'C:\xampp\htdocs\web2\practico3\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63483e43308678_21535950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffb0a62146e09e75ec1b0ce6064574e28eca57c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\header.tpl',
      1 => 1665678911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63483e43308678_21535950 (Smarty_Internal_Template $_smarty_tpl) {
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
    <nav class="navbar navbar-expand-lg bg-light">
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
        <?php ob_start();
echo $_SESSION['USER_EMAIL'];
$_prefixVariable1 = ob_get_clean();
if (!(isset($_prefixVariable1))) {?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL;?>
/admin" >Admin </a>
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
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"><?php echo '</script'; ?>
>
    </body><?php }
}
