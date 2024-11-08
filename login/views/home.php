<?php
session_start();
    if (!isset($_SESSION['usuario'])) {
    header('location: ./login.php');
    
}
require_once "../app/config/dependencias.php";
require_once "../app/controller/db.php";
// Consulta a la tabla t_producto
$conexion = new Conexion();
$consulta = $conexion->obtener_conexionn()->prepare( "SELECT * FROM t_producto"); 
$consulta->execute(); 
$productos = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>
<body>
        <div class="row">
            <?php echo 'hola ' . $_SESSION['usuario']['usuario'] ?>
            <a href="./editar-usuario.php">Editar usuario</a>
            <a id="cerrar" type="button">Cerrar sesion</a>
        </div>
        <h1 style="text-align: center;">Lista de Productos</h1>

<table id="myTable" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?php echo $producto['id_producto']; ?></td>
            <td><?php echo $producto['producto']; ?></td>
            <td><?php echo $producto['precio']; ?></td>
            <td><?php echo $producto['cantidad']; ?></td>
            <td class="actions">
                <a href="../app/controller/editar-prod.php?id=<?php echo $producto['id_producto']; ?>" class="edit">Editar</a>
                <!-- Pasamos el id del producto a la función eliminar_producto() -->
                <a href="#" class="delete" onclick="eliminar_producto(<?php echo $producto['id_producto']; ?>);">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<div style="text-align: center; margin-bottom: 20px;">
    <a href="../app/controller/agregar-prod.php" >Agregar Producto</a>
</div>
<script src="../public/js/crud.js"></script>
<link rel="stylesheet" href="<?=CSS.'style.css';?>">
<link rel="stylesheet" href="<?=CSS.'DT.css';?>">
<script src="../public/js/bootstrap.bundle.min.js"></script>
<script src="../public/js/cerrar-sesion.js" type=""></script>

</body>