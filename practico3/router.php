<?php
require_once "./app/controller/coca.controllers.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

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
    case 'login':
        $cocaController->showadminpage();
        break;
    case 'delete':
        $id = $params[1];
        deletePay($id);
        break;
    default:
        echo "404 not found";
        break;
}