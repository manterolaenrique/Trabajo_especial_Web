<?php

    class HomeModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=clicksofware;charset=utf8', 'root', '');
        }

        public function mostrarServicios(){
            $consulta = $this->db->prepare( "SELECT * from servicios");
            $consulta->execute();
            $servicios = $consulta->fetchAll(PDO::FETCH_OBJ);
        
            return $servicios;
        }

        public function mostrarOpiniones(){
            $consulta = $this->db->prepare("SELECT * from servicios inner Join opinion ON servicios.id = opinion.id_servicio");
            $consulta->execute();
            $opiniones = $consulta->fetchAll(PDO::FETCH_OBJ);   

            return $opiniones;
        }
    }

?>