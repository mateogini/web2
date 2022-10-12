<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class CocaView{
    private $smarty;
    public function __construct(){
      $this->smarty = new smarty();

    }
    function showCocas($cocacola){ 
    $this->smarty->assign('cocacola', $cocacola);
    // mostrar el tpl
    $this->smarty->display('stockview.tpl');

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
    function EditStock($cocacola){
      $this->smarty->display('cocacola', $cocacolas);

      $this->smarty->display('formEdit.tpl');

    }
  
  function showEnvase($tipos){
    $this->smarty->assign('tipos',$tipos);
    $this->smarty->display('templates/stockview.tpl');
}

}
