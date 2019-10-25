<?php

class RegistraModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=clicksofware;charset=utf8', 'root', '');
    }

    public function mostrarMail($mail){
        $consulta = $this->db->prepare( "SELECT * FROM usuarios WHERE email = $mail");
        $consulta->execute(array($mail));
        $mail = $consulta->fetch(PDO::FETCH_OBJ);
        return $mail;
    }

    public function registrar($mail, $contraseña){
        $hash = password_hash($contraseña, PASSWORD_DEFAULT, [15]);
        $consulta = $this->db->prepare("INSERT INTO usuarios (email, contraseña) VALUES (?, ?)");
        $consulta->execute(array($mail,$hash));
        
    }
}

?>