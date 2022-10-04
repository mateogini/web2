<?php
require_once "./app/controller/coca.controllers.php";
require_once "./app/controller/admin.controller.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// leo el parametro accion
$action = 'home'; // accion por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];  // action => about/juan
}
$params = explode('/', $action); // genera un arreglo  

$adminController = new AdminController();
$cocaController = new cocaController();
switch($params[0]) {
    case 'home':
        $cocaController->showCocas();
        break;
    case 'admin':
        $adminController->showStock();
        break;
    case 'login':
        $cocaController->showadminpage();
        break;
    case 'delete':
        $id = $params[1];
        deleteP($id);
        break;
    default:
        echo "404 not found";
        break;
}