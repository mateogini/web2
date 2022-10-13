<?php
require_once './app/model/coca.model.php';
require_once './app/view/coca.view.php';
require_once './app/model/tipos.model.php';
require_once './app/view/filterView.php';
//require_once './helpers/AuthHelper.php';



class CocaController {
    private $model;
    private $view;
    private $model_type;
    private $view_type;
    // private $authHelper;


    public function __construct() {
        $this->model = new CocaModel();
        $this->view = new CocaView();
        $this->view_type = new FilterView();
        $this->model_type = new TiposModel();
        } 
    //$authHelper = new AuthHelper();
    //$authHelper->checkLoggedIn();
   

   // Muestra la tabla de stock


   
    public function showCocas() {

        $cocacola = $this->model->getAllCocas();
        $this->view->showCocas($cocacola);
    }
   
    // muestra por detalle el producto seleccionado
    public function showProduct($id_stock) {
        $productSelected= $this->model->getProduct($id_stock);
        $this->view->showProduct($productSelected);
    }
    // muestra la tabla con los botones de abm
    public function showStock() {
        $this->checkLoggedIn();

        $cocacola = $this->model->getAllCocas();

        $this->view->showStock($cocacola);

    }
    public function addStock(){ //añadir un nuevo stock
        $this->checkLoggedIn();

        $tipo_coca = $_POST['tipo_coca'];
        $envase = $_POST['envase'];
        $stock = $_POST['stock'];
      
        $id = $this->model->insertStock($tipo_coca, $envase, $stock);
        header("Location: " . BASE_URL ."/admin"); 

    } // elimina el stock seleccionado
    public function deleteStock($id_stock) {
        $this->checkLoggedIn();

        $this->model->deleteStockById($id_stock);

        header("Location: " . BASE_URL ."/admin"); 
      }  
      public function EditStock($id_stock){

        $cocacola = $this->model->EditStockById($id_stock);
        $this->view->EditStock($cocacola);
    
}
 public function showFilter() {
    $tipos = $this->model_type->getType();
    $this->view_type->showType($tipos);
} 
public function checkLoggedIn() {
    if (!isset($_SESSION['IS_LOGGED'])) {
        header("Location: " . BASE_URL . '/login');
        die();
    }
} 

}
