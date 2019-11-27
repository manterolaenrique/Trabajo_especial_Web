<?php

    Class ImagenModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=clicksofware;charset=utf8', 'root', '');
        }

        public function insertaImagen($id_opinion,$imagen = null){
            $carpeta = null;
            if($imagen){
                $carpeta = $this->moverArchivo($imagen);
                $consulta = $this->db->prepare("INSERT INTO imagenes(id_opinion,img) VALUES (?,?)");
                $consulta->execute(array($id_opinion,$carpeta));
                return $this->db->lastInsertId();
            }
        }

        public function insertarOpinion($servicio,$cliente,$opinion,$imagen = null){
            if(!empty($servicio) & (!empty($opinion))){
                $consulta = $this->db->prepare("INSERT INTO opinion(id_servicio,cliente, opinion) VALUES(?,?,?)");
                $consulta->execute(array($servicio,$cliente,$opinion));
                $id = $this->db->lastInsertId();
                $this->insertaImagen($id,$imagen);
            }
        }

        //  mueve la imagen y retorna la ubicación}
        private function moverArchivo($imagen) {
            $carpeta = "img/task/" . uniqid() . "." . strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));  
            move_uploaded_file($imagen['tmp_name'], $carpeta);
            return $carpeta;
        }
            
        public function mostrarImagen($id){
            $consulta = $this->db->prepare("SELECT * from imagenes where id_opinion = ?");
            $consulta->execute(array($id));
            $imagen = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $imagen;
            }
        
        public function borrarImagen($id){
            $consulta = $this->db->prepare("DELETE FROM imagenes WHERE id=?");
            $consulta->execute(array($id));
        }

    }
?>