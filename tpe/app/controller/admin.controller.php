<?php
require_once './app/model/user.model.php';
require_once './app/view/admin.view.php';



class adminController{
    private $model;
    private $view;

    public function __construct() {
        $this->model = new UserModel();
         $this->view = new adminView();
         if (session_status() != PHP_SESSION_ACTIVE) {
            session_start(); // verifica que haya un inicio de sesion
        }  
     
    }

    public function showadminpage(){ // muestra formulario para ingresar
        $this->view->logadmin(); 
    }

     public function validateUser(){ // valida el usuario
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->model->getUser($email);

        if($user && password_verify($password, $user->password)){
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location:" . BASE_URL);
        
        }else {
            $this->view->logadmin("el usuario o la contrasena no existe.");
        }
    }
    
    public function Logout(){ // cierra sesion del usuario
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);

    }
    
}


  

