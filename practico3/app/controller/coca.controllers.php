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

    public function showCocas() {
        $cocacola = $this->model->getAllCocas();
        $this->view->showCocas($cocacola);
    }
    public function showadminpage(){
        $this->view->logadmin(); 
    }
    public function showProduct($id_stock) {
        $productSelected= $this->model->getProduct($id_stock);
        $this->view->showProduct($productSelected);
}
}