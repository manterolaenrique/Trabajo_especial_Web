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

    public function mostrar(){
        $consulta = $this->db->prepare( "SELECT * FROM usuarios");
        $consulta->execute();
        $usuarios = $consulta->fetchAll(PDO::FETCH_OBJ);
        // print_r ($usuarios);
        return $usuarios;
    }

    public function modificarAcceso($id,$acceso){
        if(!empty($acceso)){
            $consulta = $this->db->prepare("UPDATE usuarios SET acceso=? WHERE id=?");
            $consulta->execute(array($acceso,$id));
        }
    }
}
?>