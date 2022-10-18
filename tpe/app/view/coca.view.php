<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class CocaView{
    private $smarty;
    public function __construct(){
      $this->smarty = new smarty();

    }
    function showCocas($cocacola, $tipos){ 
    $this->smarty->assign('cocacola', $cocacola);
    $this->smarty->assign('tipos', $tipos);

    // mostrar el tpl
    $this->smarty->display('templates/stockview.tpl');

    }
    function showFormAdd($cocacola, $tipos){
      $this->smarty->assign('cocacola', $cocacola);
      $this->smarty->assign('tipos', $tipos);
      $this->smarty->display('templates/form.tpl');

    }
    function showStock($cocacola){ 

      $this->smarty->assign('cocacola', $cocacola);

  
      // mostrar el tpl
      $this->smarty->display('templates/stockviewAdmin.tpl');
      }
    // muestra detella de cada producto
    function showProduct($cocacolas){
      $this->smarty->assign('cocacolas', $cocacolas);

      $this->smarty->display('templates/detail.tpl');
    }
    function showCategory($category){
      $this->smarty->assign('category', $category);

      $this->smarty->display('templates/categoria.tpl');
    }
    function showFormCategory(){
      $this->smarty->display('templates/formCategory.tpl');

    }
    function showFormEdit($tipo, $cocacolas){
      $this->smarty->assign('tipo', $tipo);
      $this->smarty->assign('cocacolas',$cocacolas);
      $this->smarty->display('templates/formEdit.tpl');
    }
    function viewError($error=null){
      $this->smarty->assign("error", $error);
      $this->smarty->display("templates/error.tpl");

    }
     function showFormEditCat($tipos){
      $this->smarty->assign('tipos', $tipos);
      $this->smarty->display("templates/formEditCat.tpl");

     }


    }
  


