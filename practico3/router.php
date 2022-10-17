<?php
require_once "./app/controller/coca.controllers.php";
require_once "./app/controller/admin.controller.php";
require_once './app/controller/type.controller.php';




define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'');

// leo el parametro accion
$action = 'home'; // accion por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];  // action => about/juan
}
$params = explode('/', $action); // genera un arreglo  

$cocaController = new cocaController();
$adminController = new adminController();
$typeController = new typeController();

switch($params[0]) {
    case 'home':
        $cocaController->showCoca();
        break;
    case 'add':
        $cocaController->addStock();
        break;
    case 'login': // muestra form para loguearse
        $adminController->showadminpage();
        break;
    case 'detalle':
        $id_stock= $params[1];
        $cocaController->showProduct($id_stock);
        break;
    case 'delete':
        $id_stock = $params[1];
        $cocaController->deleteStock($id_stock);
        break;
    case 'formedit':
            $id_stock = $params[1];
            $cocaController->showFormEdit($id_stock);
            break;
    case 'edit':
        $cocaController->EditStock();
        break;
    case 'validate':
        $adminController->validateUser();
        break;
    case 'logout':
        $adminController->Logout();
    break;
    case 'list':
        $id_stock= $params[1];
        $typeController->showCategory($id_stock);
        break;

    case 'deletecat':
        $id_envase = $params[1];
        $typeController->DeleteCategory($id_envase);
        break;
    case 'addcategory':
        $typeController->addCategory();  
        break;
    case 'editarcat':
        $TypesController = new TypesController();
        $TypesController->ShowFormEditCat();  
        break;
    default:
        echo "404 not found";
        break;
}