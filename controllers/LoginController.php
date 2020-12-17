<?php

require 'Pagina/index.html';

class LoginController
{

    private $model;

    public function __construct()
    {
        try{
            $this->model = new Login;

        }catch(PDOExeption $e) {
            die($e->getMessage());
        }
        }
    public function index()
    {
    if(isset($_SESSION['usuario']))
    header('Location: ?controller=home');
    else require 'views/login.php';
    }
    public function login()
    {
        $validarUsuario = $this->model->validarUsuario($_POST);
        if($validarUsuario === true) {
            header('Location: ?controller=Matricula');
        } else {

            $error = ['errorMessage' => $validarUsuario, 'correo' => $_POST['correo']];
            require 'views/login.php';
        }
    }
    public function lagout()
    {
        if(isset($_SESSION['usuario']))
        session_destroy();
        header('Location: ?controller=login');
        
    }

    
}
