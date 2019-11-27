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
        return $usuarios;
    }

    public function modificarAcceso($id,$acceso){
        if(!empty($acceso)){
            $consulta = $this->db->prepare("UPDATE usuarios SET acceso=? WHERE id=?");
            $consulta->execute(array($acceso,$id));
        }
    }

    public function borrarUsuario($id){
        if(!empty($id)){
            $consulta = $this->db->prepare("DELETE FROM usuarios WHERE id=?");
            $consulta->execute(array($id));
        }
    }
    

    public function verificaAdmin($id){
        if ($id != ""){
          $consulta = $this->db->prepare ("SELECT * FROM usuarios where (id=?) AND (acceso=1)");
          $consulta->execute(array($id));
          $existe = $consulta->fetch(PDO::FETCH_OBJ);
          if ($existe)
            return true;
          else
            return false;  
        }
    }
}
?>