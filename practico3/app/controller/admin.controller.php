<?php
require_once './app/model/coca.model.php';
require_once './app/view/coca.view.php';
class AdminController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new CocaModel();
        $this->view = new CocaView();
    }
    public function showStock() {
        $cocacola = $this->model->getAllCocas();
        $this->view->showStock($cocacola);

    }
    public function addStock(){ //añadir un nuevo stock

        $tipo_coca = $_POST['tipo_coca'];
        $envase = $_POST['envase'];
        $stock = $_POST['stock'];
      
        $id = $this->model->insertStock($tipo_coca, $envase, $stock);
        header("Location: " . BASE_URL); 

    }
    public function deleteStock($id) {
        $this->model->deleteStockById($id);
      }  
    
}
