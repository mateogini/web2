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
    $this->smarty->display('stockview.tpl');

    }
    function showFormAdd($cocacola, $tipos){
      $this->smarty->assign('cocacola', $cocacola);
      $this->smarty->assign('tipos', $tipos);
      $this->smarty->display('form.tpl');

    }
    function showStock($cocacola){ 

      $this->smarty->assign('cocacola', $cocacola);

  
      // mostrar el tpl
      $this->smarty->display('stockviewAdmin.tpl');
      }
    
    function showProduct($cocacolas){
      $this->smarty->assign('cocacolas', $cocacolas);

      $this->smarty->display('detail.tpl');
    }
    function showCategory($category){
      $this->smarty->assign('category', $category);

      $this->smarty->display('categoria.tpl');
    }
   function EditStock($cocacola){
      $this->smarty->assign('cocacola', $cocacola);

      $this->smarty->display('formEdit.tpl');

    }
    function showFormCategory(){
      $this->smarty->display('formCategory.tpl');

    }
    function showFormEdit($tipo, $cocacolas){
      $this->smarty->assign('tipo', $tipo);
      $this->smarty->assign('cocacolas',$cocacolas);
      $this->smarty->display('formEdit.tpl');
    }
  }


