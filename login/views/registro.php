<?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        header('location: ../index.php');
    }
    
?>
<body>
    <script>
        // Hacer que el feedback de validación se muestre cuando el formulario sea enviado
        (function () {
            'use strict'
            var forms = document.querySelectorAll('form')
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
        
    </script>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <i class="fas fa-user-plus icon"></i> Registrar Usuario
                    </div>
                    <div class="card-body">
                        <form action="app/controller/registro.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" name="nombre" id="nombre" required pattern="[A-Za-z\s]+" aria-describedby="nombreHelp">
                                    <div id="nombreHelp" class="invalid-feedback">El nombre solo debe contener letras y espacios.</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>
                            </div>
                            <div class="btn-container">
                            <button  type="button" class="btn btn-success w-100" id="registrar_usuario" name="registrar_usuario">
                                    <i class="fas fa-user-check"></i> Registrar
                                </button>
                                <a class="btn btn-primary w-100" href="login.php"><i class="fas fa-sign-in-alt"></i> Volver al Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/registro.css">
    <script src="../public/js/registro-usuario.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>