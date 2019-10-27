<?php
   require_once "./Models/HomeModel.php";
   require_once "./Views/HomeView.php";

   class HomeController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new HomeModel();
        $this->view = new HomeView();
    }

    public function mostrarServicios(){
        $servicio = $this->model->mostrarServicios();
        $this->view->DisplayServicio($servicio);
    }

    public function mostrarOpiniones(){
        $opinion = $this->model->mostrarOpiniones();
        $this->view->DisplayOpiniones($opinion);
    }

    public function mostrarOrdenado(){
        $opinion = $this->model->mostrarOrdenado();
        $this->view->DisplayOpiniones($opinion);
    }

    public function mostrarOpinionesServicios($id){
        $opinion = $this->model->mostrarOpinionesServicios($id);
        $this->view->displayOpinionesServicios($opinion);
    }

    public function mostrarOpinion($id){
        $opinion = $this->model->mostrarOpinion($id);
        $this->view->displayOpinionesServicios($opinion);
    }
    

   }
?>