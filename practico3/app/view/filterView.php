<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';


class FilterView{
    private $smarty;

    public function __construct(){
      $this->smarty = new smarty();
    }
    function showType($tipos){
        $this->smarty->assign('tipos', $tipos);
        $this->smarty->display('stockview.tpl');    
    }


}