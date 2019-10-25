<?php

require_once('libs/Smarty.class.php');

    class HomeView{

        function __construct(){

        }

        public function DisplayServicio($servicio){
            $smarty = new Smarty();
            $smarty->assign('titulo',"Home de la pagina");
            $smarty->assign('BASE_URL',BASE_URL);
            $smarty->assign('lista_servicios',$servicio);
            $smarty->display('templates/ver_servicios.tpl');
        }

        public function DisplayOpiniones($opinion){
            $smarty = new Smarty();
            $smarty->assign('titulo',"Home de la pagina");
            $smarty->assign('BASE_URL',BASE_URL);
            $smarty->assign('lista_opiniones',$opinion);
            $smarty->display('templates/ver_opiniones.tpl');
        }
    }

?>