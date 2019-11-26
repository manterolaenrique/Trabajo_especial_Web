<?php

    class ServicioModel{

        private $db;

        //CONSTRUCTOR DE LA CLASE
        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=clicksofware;charset=utf8', 'root', '');
        }

        //MOSTRAR LOS SERVICIOS
        public function mostrarServicios(){
            $consulta = $this->db->prepare( "SELECT * from servicios");
            $consulta->execute();
            $servicios = $consulta->fetchAll(PDO::FETCH_OBJ);
        
            return $servicios;
        }

        //MOSTRAR LA LISTA DE LOS SERVICIOS
        public function mostrarListarServicios(){
            $consulta = $this->db->prepare( "SELECT * from servicios");
            $consulta->execute();
            $servicios = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $servicios;
        }

        //INSERTAR UN SERVICIO NUEVO
        public function insertarServicio($nombre,$informacion){
            if (!empty($nombre) & (!empty($informacion))){ 
                $consulta = $this->db->prepare("INSERT INTO servicios(nombre, info) VALUES(?,?)");
                $consulta->execute(array($nombre,$informacion));
            }
        }

        //EDITA UN SERVICIO
        public function editarServicio($id,$nombre,$informacion){
            if(!empty($nombre) & (!empty($informacion))){
                $consulta = $this->db->prepare("UPDATE servicios SET nombre=?, info=? WHERE id = ?");
                $consulta->execute(array($nombre, $informacion,$id));
            }
        }

        //RETORNA UN SERVICIO 
        public function mostrarServicio($id){
            $consulta = $this->db->prepare( "SELECT * from servicios where id = ?");
            $consulta->execute([$id]);
            $servicios = $consulta->fetch(PDO::FETCH_OBJ);
            return $servicios;
        }

        //BORRAR UN SERVICIO
        public function borrarServicio($id){
            $consulta_opiniones = $this->db->prepare("DELETE FROM opinion WHERE id_servicio=?");
            $consulta_opiniones->execute(array($id));
            $consulta = $this->db->prepare("DELETE FROM servicios WHERE id=?");
            $consulta->execute(array($id));

        }

    }
?>