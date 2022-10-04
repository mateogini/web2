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
}