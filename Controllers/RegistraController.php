<?php
require_once "./Models/RegistraModel.php";
require_once "./Views/RegistraView.php";
require_once "./Models/UsuarioModel.php";


    class RegistraController{

        private $model;
        private $view;
        private $login;

        function __construct(){
            $this->model = new RegistraModel();
            $this->view = new RegistraView();
            $this->log = new UsuarioModel();
        }

        public function registroUsuario(){
            $contraseña = $_POST['contraseña'];
            $mail = $_POST['mail'];
            $mail_base = $this->model->mostrarMail($mail);
    
            if (isset($mail) && $mail != null && !$mail_base){
                $this->model->registrar($mail,$contraseña);
                session_start();
                $_SESSION['user'] = $usuario->email;
                $_SESSION['userId'] = $usuario->id;
                $this->iniciarSesion();
                //header("Location: " . URL_ADMIN);  
            }else{
                header("Location: " . URL_ADMIN);
            }
        }

        public function iniciarSesion(){
            $contraseña = $_POST['contraseña'];
            $usuario = $this->log->mostrarContraseña($_POST['mail']);
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


    }


?>