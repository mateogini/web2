<?php
require_once './app/model/coca.model.php';
require_once './app/view/coca.view.php';
class CocaController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new CocaModel();
        $this->view = new CocaView();
    }
   // Muestra la tabla de stock
    public function showCocas() {
        $cocacola = $this->model->getAllCocas();
        $this->view->showCocas($cocacola);
    }
    // muestra pagina de login
    public function showadminpage(){
        $this->view->logadmin(); 
    }
    // muestra por detalle el producto seleccionado
    public function showProduct($id_stock) {
        $productSelected= $this->model->getProduct($id_stock);
        $this->view->showProduct($productSelected);
    }
    // muestra la tabla con los botones de abm
    public function showStock() {
        $cocacola = $this->model->getAllCocas();
        $this->view->showStock($cocacola);

    }
    public function addStock(){ //añadir un nuevo stock

        $tipo_coca = $_POST['tipo_coca'];
        $envase = $_POST['envase'];
        $stock = $_POST['stock'];
      
        $id = $this->model->insertStock($tipo_coca, $envase, $stock);
        header("Location: " . BASE_URL ."/admin"); 

    } // elimina el stock seleccionado
    public function deleteStock($id_stock) {
        $this->model->deleteStockById($id_stock);

        header("Location: " . BASE_URL ."admin"); 
      }  
      public function EditStock($id_stock){
      $cocacolas = $this->model->EditStockById($id_stock);
        $this->view->EditStock($cocacolas);
    
}
}