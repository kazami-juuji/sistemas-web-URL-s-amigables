<?php

session_start();
if (!isset($_SESSION['usuario'])) {
    header('location: login.php');
}
require_once "./app/config/dependencias.php";
require_once "./app/controller/db.php";
// Consulta a la tabla t_producto
$conexion = new Conexion();
$consulta = $conexion->obtener_conexionn()->prepare( "SELECT * FROM t_producto"); 
$consulta->execute(); 
$productos = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=CSS.'style.css';?>">
        <link rel="stylesheet" href="<?=CSS.'DT.css';?>">
        <script src="./public/js/bootstrap.bundle.min.js"></script>    
        <title>Listado de Productos</title>
    </head>
<body>
    <?php
    if (isset($_REQUEST['view'])) {
        $vista = $_REQUEST['view'];
    } else {
        $vista = 'inicio';
    }
        switch ($vista) {
            case 'inicio':{
                require_once './views/home.php';
                break;
            }
            case 'login':{
                require_once './views/login.php';
                break;
            }
            case 'registro':{
                require_once './views/registro.php';
                break;
            }
            default:{
                require_once './views/error404.php';
            }
              
        }
        
    ?>
<script src="./public/js/jquery.js"></script>
<script src="./public/js/DT.js"></script>
<script src="./public/js/crud.js"></script>
<script src="./public/js/cerrar-sesion.js"></script>

</body>
</html>
