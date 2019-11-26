<?php

    require_once "./Models/ImagenModel.php";
    require_once "./views/ImagenView.php";

    Class ImagenController{
        private $model;
        private $view;

        function __construct(){
            $this->model= new ImagenModel();
            $this->view = new ImagenView();
        }

        public function checkLogin(){
            session_start();
            if(!isset($_SESSION['userId'])){
                header("Location: " . BASE_URL);
                session_destroy();
            }
        }
        
        public function insertaImagen($id){
            $this->checkLogin();
            if ($_FILES['imagen']['name']) {
                if ($_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/png") {
                    $this->model->insertaImagen($id,$_FILES['imagen']);
                }
                else {
                    $this->view->showError("Formato no aceptado");
                    die();
                }
            }
            header("Location: " . URL_ADMIN);
        }

        public function mostrarImagen($id){
            $this->checkLogin();
            $imagen = $this->model->mostrarImagen($id);
            $this->view->mostrarImagen($imagen);
        }

        public function borrarImagen($id){
            $this->checkLogin();
            $this->model->borrarImagen($id);
            header("Location: " . URL_ADMIN);
        }

        


    }
?>   