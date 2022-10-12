<?php
require_once './app/model/user.model.php';
require_once './app/view/admin.view.php';



class adminController{
    private $model;
    private $view;

    public function __construct() {
    // $this->model = new UserModel();
     $this->view = new adminView();
     
    }

    public function showadminpage(){
        $this->view->logadmin(); 
    }

     public function validateUser(){
        if(!empty($_POST['email']) || !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->model->getUser($email);

        if($user && password_verify($password, $user->password)){
            echo"acceso existoso";        
        } }
        else {
            $this->view->logadmin("el usuario o la contrasena no existe.");
        }
}
}

  

