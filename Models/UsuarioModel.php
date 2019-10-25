<?php
class UsuarioModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=clicksofware;charset=utf8', 'root', '');
    }
    

    public function mostrarContraseña($usuario){
        $consulta = $this->db->prepare( "SELECT * FROM usuarios WHERE email = ?");
        $consulta->execute(array($usuario));
        $contraseña = $consulta->fetch(PDO::FETCH_OBJ);
        
        
        return $contraseña;
    }
}

?>