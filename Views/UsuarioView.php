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

    public function displayAdmin(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Login");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('templates/panel.tpl');
        $smarty->display('templates/control_admin.tpl');
    }

    public function mostrar($usuario){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Lista Usuarios");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('lista_usuarios',$usuario);
        $smarty->display('templates/usuario.tpl');
    }

    public function DisplayOlvideContraseña(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"olvideContraseña");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('templates/olvideContraseña.tpl');
    }

    public function contraseñaNueva($contra){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Nueva Contraseña");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('usuario_ver',$contra);
        $smarty->display('templates/mostrarContrasenaNueva.tpl');
    }

   
}

?>