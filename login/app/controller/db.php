<?php




class Conexion {
    private $host = 'localhost'; // o tu servidor de base de datos
    private $dbname = 'tienda';
    private $username = 'root';  // Cambia por tu usuario de MySQL
    private $password = '';      // Cambia por tu contraseña de MySQL
    private $conn;
    
    
    private function crear_conexionn() {
        if (!$this->conn) {
            
            try {
                $this->conn = new PDO("mysql:host=$this->host; dbname=$this->dbname;",$this->username,$this->password);
                // Configuración de errores
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "Conexión exitosa";
                return $this->conn; 
            } catch (PDOException $e) {
                return $e;
                
            }
        } else {
            return $this->conn;
        }
        
    }
    public function obtener_conexionn() {
        return $this->crear_conexionn();
    }
    public function cerrar_conexionn() {
        $this->conn = null;
    }
}
?>
