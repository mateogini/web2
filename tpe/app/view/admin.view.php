<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class adminView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty

    }
    function Logadmin($error = null){ // envio mensaje de error
        $this->smarty->assign("error", $error);
        $this->smarty->display('templates/admin.tpl');
    }
}