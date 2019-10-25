<?php

require_once('libs/Smarty.class.php');


class UsuarioView {

    function __construct(){

    }

    public function displayPanel(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Login");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('templates/panel.tpl');
    }
}

?>