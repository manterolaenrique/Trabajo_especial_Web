<?php

require_once "Controllers/HomeController.php";
require_once "Controllers/UsuarioController.php";
require_once "Controllers/RegistraController.php";
require_once "Controllers/ServicioController.php";
require_once "Controllers/OpinionController.php";
require_once "COntrollers/ImagenController.php";



$action = $_GET["action"];
define("URL_HOME", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/inicio');
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
define("URL_ADMIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/panel');


$homeController = new HomeController();
$servicioController = new ServicioController();
$opinionController = new OpinionController();
$imagenController = new ImagenController();
$usuarioController = new UsuarioController();
$registraController = new RegistraController();



if($action == ''){
   $homeController->mostrarServicios();
   $homeController->mostrarOpiniones();

}else{
    if (isset($action)){
        $partesURL = explode("/", $action);
        if($partesURL[0] == "iniciarSesion") {
            $usuarioController = new UsuarioController();
            $usuarioController->iniciarSesion();
        }elseif($partesURL[0] == "registroUsuario") {
            $controllerRegistro = new RegistraController();
            $controllerRegistro->registroUsuario();
            $controllerRegistro->iniciarSesion();
        }elseif($partesURL[0] == "panel") {
            $usuario = new UsuarioController();
            $usuario->login();
            $servicioController->mostrarServicios();
            $opinionController->mostrarOpiniones();
            $servicioController->mostrarListarServicios();
        }elseif($partesURL[0] == "mostrarEditarServicio"){
            $servicioController->mostrarModificarServicio($partesURL[1]);
        }elseif($partesURL[0] == "editar"){
            $servicioController->editarServicio($partesURL[1]);
        }elseif($partesURL[0] == "insertarServicio") {
            $servicioController->insertarServicio();
        }elseif($partesURL[0] == "borrar") { 
            $servicioController->borrarServicio($partesURL[1]); 
        }elseif($partesURL[0] == "insertarOpinion") { 
            $opinionController->insertarOpinion(); 
        }elseif($partesURL[0] == "borrarOpinion") { 
            $opinionController->borrarOpinion($partesURL[1]); 
        }elseif($partesURL[0] == "mostrarEditarOpinion"){
            $opinionController->mostrarModificarOpinion($partesURL[1]);
        }elseif($partesURL[0] == "editarOpinion"){
            $opinionController->editarOpinion($partesURL[1]);
        }elseif($partesURL[0] == "cerrarSesion") { 
           $usuario = new UsuarioController();
           $usuario->cerrarSesion();
        }elseif($partesURL[0] == "listarOpinion") { 
            $homeController->mostrarServicios();
            $homeController->mostrarOrdenado();
        }elseif($partesURL[0] == "verMasServicios") { 
            $homeController->mostrarOpinionesServicios($partesURL[1]); 
        }elseif($partesURL[0] == "verMasOpinion") { 
            $homeController->mostrarOpinion($partesURL[1]); 
        }elseif($partesURL[0] == "mostrarImagen"){
            $imagenController->mostrarImagen($partesURL[1]);
        }elseif($partesURL[0] == "insertarImagen"){
            $imagenController->insertaImagen($partesURL[1]);
        }elseif($partesURL[0] == "borrarImagen"){
            $imagenController->borrarImagen($partesURL[1]);
        }elseif($partesURL[0] == "usuario"){
            $usuarioController->mostrar();
        }elseif($partesURL[0] == "usuarioAplica"){
            $usuarioController->modificarAcceso();
        }elseif($partesURL[0] == "usuarioBorrar"){
            $usuarioController->borrarUsuario();
        }elseif($partesURL[0] == "mostrarOlvideContraseña"){
            $usuarioController->mostrarOlvideContraseña();
        }elseif($partesURL[0] == "olvideContraseña"){
            $usuarioController->olvideContraseña();
        } elseif($partesURL[0] == "nuevaContraseña"){
            $registraController->nuevaContraseña();
        }           
    }
}

?>