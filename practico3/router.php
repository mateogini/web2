<?php
require_once "./app/controller/coca.controllers.php";
require_once "./app/controller/admin.controller.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'');

// leo el parametro accion
$action = 'home'; // accion por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];  // action => about/juan
}
$params = explode('/', $action); // genera un arreglo  

$cocaController = new cocaController();

switch($params[0]) {
    case 'home':
        $cocaController->showCocas();
        break;
    case 'admin':
        $cocaController->showStock();
        break;
    case 'add':
        $cocaController->addStock();
        break;
    case 'login':
        $cocaController->showadminpage();
        break;
    case 'detalle':
        $id_stock= $params[1];
        $cocaController->showProduct($id_stock);
        break;
    case 'delete':
        $id_stock = $params[1];
        $cocaController->deleteStock($id_stock);
        break;
    case 'edit':
        $id_stock = $params[1];
        $cocaController->EditStock($id_stock);
        break;
    default:
        echo "404 not found";
        break;
}