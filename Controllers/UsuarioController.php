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
            return $_SESSION['userId'];
        }

        public function iniciarSesion(){
            $contraseña = $_POST['contraseña'];
            $usuario = $this->model->mostrarContraseña($_POST['usuario']);
            if (isset($usuario) && $usuario != null && password_verify($contraseña, $usuario->contrasena)){
                session_start();
                $_SESSION['user'] = $usuario->email;
                $_SESSION['userId'] = $usuario->id;
                header("Location: " . URL_ADMIN);
            }else{
                header("Location: " . BASE_URL);
            }   
        }
        

        function ramdon(){
            $cadena_base =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            $cadena_base .= '0123456789' ;
            $password = '';
            $limite = strlen($cadena_base) - 1;
            for ($i=0; $i < 8; $i++)
              $password .= $cadena_base[rand(0, $limite)];
            return $password;
          }

        public function olvideContraseña(){
            $email = $this->model->olvideContraseña($_POST['mail_usuario']);
            if($email){
                $this->model->actualizarContraseña($_POST['mail_usuario'],$this->ramdon());
                $contraseña = $this->model->mostrarContrasena($_POST['mail_usuario']);
                $this->view->contraseñaNueva($contraseña);     
            }else
                 header("Location: " . BASE_URL);

        }

        public function mostrarOlvideContraseña(){
            $this->view->DisplayOlvideContraseña();
        }

        public function mostrar(){
            $usuarios = $this->model->mostrar();
            $this->view->mostrar($usuarios);
        }

        public function login(){
            $user = $this->checkLogin();
            $admin = $this->model->verificaAdmin($user);
            if ($admin)
                $this->view->displayAdmin();
            else
                $this->view->displayPanel();
        }

        public function modificarAcceso(){
            $this->model->modificarAcceso($_POST['usuario'],$_POST['prioridad']);
            header("Location: " . URL_ADMIN);
        }

        public function cerrarSesion(){
            $this->checkLogin();
            session_destroy();
            header("Location: " . BASE_URL);
        }

        public function borrarUsuario(){
            $this->model->borrarUsuario($_POST['usuario']);
            header("Location: " . URL_ADMIN);
        }
        
    }
?>