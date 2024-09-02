<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - EclipseForge</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="registro.css">
</head>
<body>


     <!-- Menú de navegación superior -->
     <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
           <a class="navbar-brand" href="Inicio.html">
                <img src="Img/logo.png" alt="Logo" class="logo">
                EclipseForge
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="noticias.html">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="actualidad.html">Actualidad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Iniciar Sesión</a>
                    </li>

                 <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="menuIcon" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                        </svg>
                    </a>
                    <!-- Menú desplegable -->
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="menuIcon">
                        <li><a class="dropdown-item" href="mejores.html">Los Mejores</a></li>
                        <li><a class="dropdown-item" href="exclusivos.html">Exclusivos</a></li>
                        <li><a class="dropdown-item" href="velocidad.html">Velocidad y Elegancia</a></li>
                        <li><a class="dropdown-item" href="nosotros.html">Nosotros</a></li>
                    </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>





  <div class="container d-flex justify-content-center align-items-center min-vh-100 mt-4">
        <div class="register-form p-5 rounded shadow-lg">
            <h1 class="text-center mb-4">Registro</h1>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nombre = $_POST['nombre'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $confirmarPassword = $_POST['confirmarPassword'];

                    if (empty($nombre) || empty($email) || empty($password) || empty($confirmPassword)) {
                        echo "<p class='text-danger text-center'>Todos los campos son obligatorios.</p>";
                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo "<p class='text-danger text-center'>Correo electrónico no válido.</p>";
                    } elseif ($password !== $confirmarPassword) {
                        echo "<p class='text-danger text-center'>Las contraseñas no coinciden.</p>";
                    } else {
                        echo "<p class='text-success text-center'>Registro exitoso.</p>";
                    }
                }
            ?>
            <form action="register.php" method="POST">
                <div class="mb-4">
                    <label for="nombre" class="form-label">Nombre</label>
                    <div class="input-group">
                        <span class="input-group-text bg-transparent"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control w-100" id="nombre" name="nombre" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <div class="input-group">
                        <span class="input-group-text bg-transparent"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control w-100" id="email" name="email" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                    <div class="input-group">
                        <span class="input-group-text bg-transparent"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control w-100" id="password" name="password" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="confirmPassword" class="form-label">Repita la Contraseña</label>
                    <div class="input-group">
                        <span class="input-group-text bg-transparent"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control w-100" id="confirmarPassword" name="confirmarPassword" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Registrarse</button>
            </form>
            <div class="d-flex justify-content-center mt-4">
                <a href="login.php" class="link-secondary text-decoration-none">¿Ya tienes cuenta? Inicia sesión</a>
            </div>
        </div>
    </div>







<footer class=" text-white pt-4 pb-2 mt-5">
    <div class="container">
        <!-- Sección de información -->
        <div class="row">
            <div class="col-md-4" style="text-align: justify;">
                <h5>Sobre Nosotros</h5>
                <p>Destacamos lo mejor del mundo de los autos, desde los icónicos vehículos clásicos que marcaron época, hasta las últimas innovaciones tecnológicas que están redefiniendo el futuro de la conducción.</p>
            </div>


            
            <!-- Sección de enlaces -->
            <div class="col-md-4" style="padding-left: 100px;">
                <h5 style="">Enlaces Rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="index.html" class="text-white">Inicio</a></li>
                    <li><a href="registro.php" class="text-white">Registrate</a></li>
                    <li><a href="contacto.html" class="text-white">Contáctanos</a></li>
                    <li><a href="politica.html" class="text-white">Política de Privacidad</a></li>
                </ul>
            </div>

           <div class="col-md-4">
                <h5>Siguenos</h5>
                <a href="https://www.facebook.com/" class="text-white me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                    </svg>
                </a>
                <a href="https://www.tiktok.com/es/" class="text-white me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                     <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/" class="text-white me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                </a>
            </div>
        </div>     
       
    </div>
     <!-- Sección de derechos reservados -->
        <div class="footer-bottom text-center pt-3">
            <p class="m-0">&copy; 2024 EclipseForge. Todos los derechos reservados.</p>
        </div>
</footer>

</body>
</html>


</body>
</html>