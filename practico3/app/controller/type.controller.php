<?php
require_once './app/view/coca.view.php';
require_once './app/model/tipos.model.php';

class TypeController {
    private $model;
    private $view;
    // private $authHelper;


    public function __construct() {
        $this->model = new TiposModel();
        $this->view = new CocaView();
        } 
        public function showCategory($id_stock) {
            $category= $this->model->getCategory($id_stock);
            $this->view->showCategory($category);
        }
        public function addCategory(){ //añadir un nuevo stock
            $this->checkLoggedIn();
            $this->view->showFormCategory();
            if((isset($_POST['envase_name']))){
            $envase_name = $_POST['envase_name'];
          
            $id = $this->model->insertCategory($envase_name);
            header("Location: " . BASE_URL ."/home"); 
            }
    
        } // elimina el stock seleccionado
        public function DeleteCategory($id_envase) {
            $this->checkLoggedIn();
            $this->model->deleteCat($id_envase);
    
            header("Location: " . BASE_URL .""); 
          }  
          public function checkLoggedIn() {
            if (!isset($_SESSION['IS_LOGGED'])) {
                header("Location: " . BASE_URL . '/login');
                die();
            }
        } 
    }