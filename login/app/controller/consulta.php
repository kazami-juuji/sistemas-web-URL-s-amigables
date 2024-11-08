<?php
    require_once '../config/conexion.php';


    class Productos extends Conexion{
        public function consultar(){
            $consulta = $this->obtener_conexion()->prepare("SELECT * FROM t_producto");
            $consulta->execute();
            $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
            $this->cerrar_conexion();
            echo json_encode($datos);

        }
        public function agregar_prod() {
            
        }

    }
    $consulta = new Productos();
    $metodo = $_POST['metodo'];
    $consulta->$metodo();
?>