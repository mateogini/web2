<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class adminView{
    private $smarty;
    public function __construct(){
      $this->smarty = new smarty();

    }
    function logadmin($error = " "){
        $this->smarty->display('admin.tpl');
        $this->smarty->display('error', $error);
        $this->smarty->display('admin.tpl');

        }

}