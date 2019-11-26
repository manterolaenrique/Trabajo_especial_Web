<?php
require_once "./Models/RegistraModel.php";
require_once "./Views/RegistraView.php";


    class RegistraController{

        private $model;
        private $view;

        function __construct(){
            $this->model = new RegistraModel();
            $this->view = new RegistraView();
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
                header("Location: " . URL_ADMIN);  
            }else{
                header("Location: " . BASE_URL);
            }
        }


    }


?>