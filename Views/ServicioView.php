<?php

require_once('libs/Smarty.class.php');

    class ServicioView{

        //CONSTRUCTOR DE LA CLASE
        function __construct(){

        }

        public function displayServicio($servicio){
            $smarty = new Smarty();
            $smarty->assign('titulo',"Panel Administrador");
            $smarty->assign('BASE_URL',BASE_URL);
            $smarty->assign('lista_servicios',$servicio);
            $smarty->display('templates/servicio.tpl');
        }

        public function displayEditarServicio($servicio){
            
            $smarty = new Smarty();
            $smarty->assign('titulo',"Editar Servicios");
            $smarty->assign('BASE_URL',BASE_URL);
            $smarty->assign('servicio',$servicio);
            $smarty->display('templates/editar_servicio.tpl');
        }
        
        public function displayListarServicio($servicio){
            $smarty = new Smarty();
            $smarty->assign('titulo',"Panel Administrador");
            $smarty->assign('BASE_URL',BASE_URL);
            $smarty->assign('lista_servicios',$servicio);
            $smarty->display('templates/lista_servicios.tpl');
        }
    }
?>