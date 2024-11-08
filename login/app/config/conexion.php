<?php

class Conexion {
        private $user = "root";
        private $pass = "";
        private $server = "localhost";
        private $nameDB = "tienda";
        private $conexion;
        
        private function crear_conexion() {
            if (!$this->conexion) {

                try{
                    $this->conexion = new PDO("mysql:host=$this->server; dbname=$this->nameDB;",$this->user,$this->pass);
                    return $this->conexion; 
                }catch(PDOException $e){
                    return $e;
                    // die('Conexion fallida' . $e);
                }
            } else {
                return $this->conexion;
            }
            
        }
        public function obtener_conexion() {
            return $this->crear_conexion();
        }
        public function cerrar_conexion() {
            $this->conexion = null;
        }
    }
?>