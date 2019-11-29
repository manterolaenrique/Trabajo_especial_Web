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
            $this->login = new UsuarioModel();
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
            }else{
                header("Location: " . URL_ADMIN);
            }
        }

        public function nuevaContraseña(){
            $contraseñaVieja= $_POST['contraseñaActual'];
            $contraseñaNueva=$_POST['nuevaContraseña'];
            $confirmacionContraseña=$_POST['confirmContraseña'];
            if (($contraseñaNueva == $confirmacionContraseña) and ($this->model->confirmarContraseña($contraseñaVieja))){
                $this->model->actualizarContraseña($_POST['id'],$contraseñaNueva);
                header("Location: " . BASE_URL);
                // die();
               }            
        }

        public function iniciarSesion(){
            $contraseña = $_POST['contraseña'];
            $usuario = $this->login->mostrarContraseña($_POST['mail']);
            if (isset($usuario) && $usuario != null && password_verify($contraseña, $usuario->contrasena)){
                session_start();
                $_SESSION['user'] = $usuario->email;
                $_SESSION['userId'] = $usuario->id;
                header("Location: " . URL_ADMIN);
            }else{
                header("Location: " . BASE_URL);
            }   
        }


    }


?>