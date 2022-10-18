<?php
require_once './app/model/coca.model.php';
require_once './app/view/coca.view.php';
require_once './app/model/tipos.model.php';

//require_once './helpers/AuthHelper.php';

class CocaController {
    private $model;
    private $view;
    private $model_type;
    // private $authHelper;

    public function __construct() {
        $this->model = new CocaModel();
        $this->view = new CocaView();
        $this->model_type = new TiposModel();
        } 

   
    public function showCoca() {

        $cocacola = $this->model->getAllCocas();  
        $tipos = $this->model_type->getEnvase();  

        $this->view->showCocas($cocacola, $tipos);

    }
   
    // muestra por detalle el producto seleccionado
    public function showProduct($id_stock) {
        $productSelected= $this->model->getProduct($id_stock);
        $this->view->showProduct($productSelected);
    }

    public function addStock(){ //añadir un nuevo stock
        $this->checkLoggedIn();
        $cocacola = $this->model->getAllCocas();  
        $tipos = $this->model_type->getEnvase();  
        $this->view->showFormAdd($cocacola, $tipos);
        if((isset($_POST['tipo_coca'])) || (isset($_POST['envase'])) || (isset($_POST['stock']))){
        $tipo_coca = $_POST['tipo_coca'];
        $envase = $_POST['envase'];
        $stock = $_POST['stock'];
      
        $id = $this->model->insertStock($tipo_coca, $envase, $stock);
        header("Location: " . BASE_URL); 
        }

    } // elimina el stock seleccionado
    public function deleteStock($id_stock) {
        $this->checkLoggedIn();

        $this->model->deleteStockById($id_stock);

        header("Location: " . BASE_URL .""); 
      } 
      public function showFormEdit($id_stock){
        $this->checkLoggedIn();
        $cocacolas= $this->model->getID($id_stock);
        $tipo = $this->model_type->getEnvase();  
        $this->view->showFormEdit($tipo, $cocacolas);
      }

     public function EditStock(){
        $this->checkLoggedIn();
      
            $id_stock = $_POST['id_stock'];
            $tipo_coca = $_POST['tipo_coca'];
            $envase = $_POST['envase'];
            $stock = $_POST['stock'];

            $this->model->EditStock($tipo_coca,$envase,$stock,$id_stock);
            header("Location: " . BASE_URL .""); 

        }
    
public function checkLoggedIn() {
    if (!isset($_SESSION['IS_LOGGED'])) {
        header("Location: " . BASE_URL . '/login');
        die();
    }
} 
}


