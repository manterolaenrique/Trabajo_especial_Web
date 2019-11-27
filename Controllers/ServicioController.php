<?php
require_once "./Models/ServicioModel.php";
require_once "./Views/ServicioView.php";

class ServicioController{
    private $model;
    private $view;

    //CONSTRUCTOR DE LA CLASE
    function __construct(){
        $this->model = new ServicioModel();
        $this->view = new ServicioView();
    }

    //VERIFICA SI HAY UN USUARIO LOGUEADO
    public function checkLogin(){
        session_start();
        if(!isset($_SESSION['userId'])){
            header("Location: " . BASE_URL);
            session_destroy();
        }
    }

    //VA A MOSTRASR TODO LOS SERVICIOS A UN USUARIO ANONIMO.
    public function mostrarServicios(){
        $servicio = $this->model->mostrarServicios();
        $this->view->displayServicio($servicio);
    }

    //LISTAR LOS SERVICIOS CARGADOS
    public function mostrarListarServicios(){
        $servicio = $this->model->mostrarListarServicios();
        $this->view->displayListarServicio($servicio);
    }

    //VA A INSERTAR UN SERVICIO NUEVO
    public function insertarServicio(){
        $this->checkLogin();
        $this->model->insertarServicio($_POST['nombre_servicio'],$_POST['info_servicio']);
        header("Location: " . URL_ADMIN);
    }

    //VA A MOSTRAR EL FORM DEL EDITAR SERVICIO
    public function mostrarModificarServicio($id){
        $this->checkLogin();
        $servicio = $this->model->mostrarServicio($id);
        $this->view->displayEditarServicio($servicio);
   }

   //VA A EDITAR UN SERVICIO
   public function editarServicio($id){
        $this->checkLogin();
        $servicio = $this->model->editarServicio($id,$_POST["nombre"],$_POST["informacion"]);
        header("Location: " . URL_ADMIN);
    }

    //VA A BORRAR UN SERVICIO
    public function borrarServicio($id){
        $this->checkLogin();
        $this->model->borrarServicio($id);
        header("Location: " . URL_ADMIN);
    }

}
?>