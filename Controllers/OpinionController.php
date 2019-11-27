<?php
    require_once "./Models/OpinionModel.php";
    require_once "./Models/ImagenModel.php"; 
    require_once "./Views/OpinionView.php";
    

    class OpinionController{
        private $model;
        private $view;

        function __construct(){
            $this->model = new OpinionModel();
            $this->view = new OpinionView();
            $this->model2= new ImagenModel();
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
            $servicio = $_POST['servicio'];
            echo $servicio;
            $cliente = $_POST['nombre_cliente'];
            $opinion = $_POST['opinion_servicio'];
            //$this->checkLogin();
            if ($_FILES['imagen']['name']) {
                if ($_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/png") {
                    $this->model2->insertarOpinion($servicio,$cliente,$opinion,$_FILES['imagen']);
                }
                else {
                    $this->view->showError("Formato no aceptado");
                    die();
                }
            }
            else {
                $this->model->insertarOpinion($servicio,$cliente,$opinion);  
            }
            header("Location: " . URL_ADMIN);

        }

        //   //VA A EDITAR UN SERVICIO
        public function editarOpinion($id){
            $this->checkLogin();
            $cliente = $_POST["nombre_cliente"];
            $opinion = $_POST["opinion"];
            $opinion = $this->model->editarOpinion($id,$cliente,$opinion);
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