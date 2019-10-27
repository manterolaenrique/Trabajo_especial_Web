<?php

    class OpinionModel{

        private $db;

        //CONSTRUCTOR DE LA CLASE
        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=clicksofware;charset=utf8', 'root', '');
        }

        //MUESTRA UN LISTADO DE OPINIONES
        public function mostrarOpiniones(){
            $consulta = $this->db->prepare("SELECT * from servicios inner Join opinion ON servicios.id = opinion.id_servicio");
            $consulta->execute();
            $opiniones = $consulta->fetchAll(PDO::FETCH_OBJ);   

            return $opiniones;
        }

         //INSERTAR UN SERVICIO NUEVO
         public function insertarOpinion($servicio,$cliente,$opinion){
            $consulta = $this->db->prepare("INSERT INTO opinion(id_servicio,cliente, opinion) VALUES(?,?,?)");
            $consulta->execute(array($servicio,$cliente,$opinion));
        }

         //EDITA UN SERVICIO
         public function editarOpinion($id,$cliente,$opinion){
            $consulta = $this->db->prepare("UPDATE opinion SET cliente=?, opinion=? WHERE id = ?");
            $consulta->execute(array($cliente, $opinion,$id));
        }

        public function mostrarOpinion($id){
            $consulta = $this->db->prepare( "SELECT * from opinion where id = ?");
            $consulta->execute([$id]);
            $opiniones = $consulta->fetch(PDO::FETCH_OBJ);
            return $opiniones;
        }

        //BORRAR UN OPINION
        public function borrarOpinion($id){
            $consulta = $this->db->prepare("DELETE FROM opinion WHERE id=?");
            $consulta->execute(array($id));
        }

    }
?>
