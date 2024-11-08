<?php
session_start();
    if (isset($_SESSION['usuario'])) {
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <style>
        body {
            background-color: purple;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }       
    </style>
</head>
<dody>
    
    
    <script src="./public/js/jquery.js"></script>
    <script src="./public//js/login.js"></script>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
