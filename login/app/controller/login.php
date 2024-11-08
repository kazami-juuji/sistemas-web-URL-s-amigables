<?php
    require_once '../controller/db.php';
    session_start();
    class Login extends Conexion {
        public function logeos() {
            
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
        
            $logeo = $this->obtener_conexionn()->prepare("SELECT * FROM t_usuario WHERE
            usuario = :usuario");
            $logeo->bindParam(':usuario',$usuario);
            $logeo->execute();
            $datos = $logeo->fetch(PDO::FETCH_ASSOC);
            if($datos){
                if($datos['password'] == $password){
                    $_SESSION['usuario'] = $datos;
                    echo json_encode([1, "Sesion Iniciada"]);
                }else{
                    echo json_encode([0, "Error en credenciales de acceso!"]);
                }
            }else{
                echo json_encode([0, "Informacion no localizada!"]);
            }
        }
    }
    $logeo = new Login();
    $metodo = $_POST['metodo'];
    $logeo->$metodo();
?>