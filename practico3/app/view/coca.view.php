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
  
    function logadmin(){
    $this->smarty->display('admin.tpl');

    }
  }
