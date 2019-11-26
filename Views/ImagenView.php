<?php
    require_once('libs/Smarty.class.php');

    Class ImagenView{

        function __construct(){

        }

        public function mostrarImagen($imagen){
            $smarty = new Smarty();
            $smarty->assign('titulo',"Mostrar Imagen");
            $smarty->assign('BASE_URL',BASE_URL);
            $smarty->assign('lista_imagen',$imagen);
            $smarty->display('templates/ver_imagen.tpl');
        }

        public function displayEditarOpinion($opinion){
            
            $smarty = new Smarty();
            $smarty->assign('titulo',"Editar Servicios");
            $smarty->assign('BASE_URL',BASE_URL);
            $smarty->assign('opinion',$opinion);
            $smarty->display('templates/editar_opinion.tpl');
        }

       
        public function showError($msg) {
            echo $msg;
        }
    }