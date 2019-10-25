<?php
require_once "./Models/UsuarioModel.php";
require_once "./Views/UsuarioView.php";

    class UsuarioController{

        private $model;
        private $view;

        function __construct(){
            $this->model = new UsuarioModel();
            $this->view = new UsuarioView();
        }

        public function checkLogin(){
            session_start();
            if(!isset($_SESSION['userId'])){
                header("Location: " . BASE_URL);
                die();
            }
        }

        public function iniciarSesion(){
            $contraseña = $_POST['contraseña'];
            $usuario = $this->model->mostrarContraseña($_POST['usuario']);
            if (isset($usuario) && $usuario != null && password_verify($contraseña, $usuario->contraseña)){
                session_start();
                $_SESSION['user'] = $usuario->email;
                $_SESSION['userId'] = $usuario->id;
                header("Location: " . URL_ADMIN);
                // $this->view->displayPanel();
            }else{
                header("Location: " . BASE_URL);
            }   
        }

        public function login(){
            $this->checkLogin();
            $this->view->displayPanel();
        }

        public function cerrarSesion(){
            $this->checkLogin();
            session_destroy();
            header("Location: " . BASE_URL);
        }
    }


?>