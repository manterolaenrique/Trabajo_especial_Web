<?php
    require_once "./Models/OpinionModel.php";
    require_once "./Models/ImagenModel.php"; 
    require_once "./Views/OpinionView.php";
    

    class OpinionController{
        private $model;
        private $view;
        private $modelImagen;

        function __construct(){
            $this->model = new OpinionModel();
            $this->view = new OpinionView();
            $this->modelImagen= new ImagenModel();
        }

        //VERIFICA SI HAY UN USUARIO LOGUEADO
        public function checkLogin(){
            session_start();
            if(!isset($_SESSION['userId'])){
                header("Location: " . BASE_URL);
                session_destroy();
            }
        }

        //MUESTRA EL LISTADO DE LAS OPINIONES
        public function mostrarOpiniones(){
            $opinion = $this->model->mostrarOpiniones();
            $this->view->displayOpiniones($opinion);
        }

         //VA A MOSTRAR EL FORM DEL EDITAR Opinion
        public function mostrarModificarOpinion($id){
            $this->checkLogin();
            $opinion = $this->model->mostrarOpinion($id);
            $this->view->displayEditarOpinion($opinion);
        }


        //INSERTA UNA OPNION NUEVA
        public function insertarOpinion(){
            $this->checkLogin();
            if ($_FILES['imagen']['name']) {
                if ($_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/png") 
                    $this->modelImagen->insertarOpinion($_POST['servicio'],$_POST['nombre_cliente'],$_POST['opinion_servicio'],$_FILES['imagen']);
                else {
                    $this->view->showError("Formato no aceptado");
                    die();
                }
            }
            else
                $this->modelImagen->insertarOpinion($_POST['servicio'],$_POST['nombre_cliente'],$_POST['opinion_servicio']);  
            header("Location: " . URL_ADMIN);
        }

        //VA A EDITAR UN SERVICIO
        public function editarOpinion($id){
            $this->checkLogin();
            $opinion = $this->model->editarOpinion($id,$_POST["nombre_cliente"],$_POST["opinion"]);
            header("Location: " . URL_ADMIN);
        }


        //BORRA UNA OPINION
        public function borrarOpinion($id){
            $this->checkLogin();
            $this->model->borrarOpinion($id);
            header("Location: " . URL_ADMIN);
        }

        

    }
?>