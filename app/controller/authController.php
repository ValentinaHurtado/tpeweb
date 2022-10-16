<?php
require_once 'app/model/userModel.php';
require_once 'app/view/authView.php';
class AuthController{
    private $model;
    private $view;

    public function __construct(){
        $this -> model = new UserModel();
        $this -> view  = new AuthView();
    }

    public function showFormLogin(){
        $this -> view -> showFormLogin();
    }

    public function validateUser(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this -> model -> getUserByEmail($email);

        if($user && password_verify($password, $user->password)){
            session_start();
            $_SESSION['USER_ID']=$user->Id_user;
            $_SESSION['USER_EMAIL']=$user->Email;
            $_SESSION['IS_LOGGED']=true;

            header("Location: ". BASE_URL);
        }else{
            $this -> view -> showFormLogin("El usuario o contraseña es invalido");
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header('Location: ' . BASE_URL);
    }
}