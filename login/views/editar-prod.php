<body>

    <div class="container">
        <h1>Editar Producto</h1>

        <form id="editar-form">
            <div class="form-group">
                <label for="producto">Producto:</label>
                <input type="text" id="producto" value="<?php echo $producto['producto']; ?>" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" step="0.01" id="precio" value="<?php echo $producto['precio']; ?>" required>
            </div>

            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" value="<?php echo $producto['cantidad']; ?>" required>
            </div>

            <button type="button" onclick="editar_producto(<?php echo $producto['id_producto']; ?>)">Guardar Cambios</button> <!-- Llamada a la función JS -->
        </form>

        <a href="../../views/home.php" class="regresar">Regresar al listado</a>
    </div>
    <script src="../../public/js/crud.js"></script>

</body>