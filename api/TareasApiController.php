<?php
require_once("./Models/TareasModel.php");
require_once("./api/JSONView.php");

class TareasApiController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new TareasModel();
        $this->view = new JSONView();
    }

    public function getTareas($params = null) {
        $tareas = $this->model->getTareas();
        $this->view->response($tareas, 200);
    }

    /**
     * Obtiene una tarea dado un ID
     * 
     * $params arreglo asociativo con los parámetros del recurso
     */
    public function getTarea($params = null) {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];
        
        $tarea = $this->model->GetTarea($id);
        
        if ($tarea) {
            $this->view->response($tarea, 200);   
        } else {
            $this->view->response("No existe la tarea con el id={$id}", 404);
        }
    }
}