<?php
    require_once '../config/conexion.php';

// Verificar que el método de la solicitud sea POST y que la acción sea 'eliminar'
class eliminarr extends Conexion {
    public function borrar_prod() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'eliminar') {
            $id = $_POST['producto_key'];
        
            // Eliminar producto de la base de datos
            $query = $this->obtener_conexionn()->prepare("DELETE FROM t_producto WHERE id_producto = :id");
            $query->bindParam(':id', $id);
        
            if ($query->execute()) {
                // Respuesta exitosa en formato JSON
                echo json_encode([1, "Producto eliminado exitosamente."]);
            } else {
                // Error al eliminar
                echo json_encode([0, "Error al eliminar el producto."]);
            }
            exit(); // Terminar el script después de enviar la respuesta JSON

        }
    }
}

?>
