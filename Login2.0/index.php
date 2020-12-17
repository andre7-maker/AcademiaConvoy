<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: ../views/inicio.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y registro</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
    
    <link rel = "preconnect" href = "https://fonts.gstatic.com"> <link href = "https://fonts.googleapis.com/css2? family = Roboto: wght @ 100 & display = swap" rel = "hoja de estilo">

</head>
<body>

    <main>

        <div class="contenedor__todo">
            
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Registrarse</button>
                    </div>
                </div>
            
                <div class="contenedor__login-register">
                    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="password">
                        <button>Entrar</button>
                    </form>

                    <form onsubmit="validar()" action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" id="nombre" placeholder="Nombre Completo" name="nombre_completo">
                        <input type="text" id="correo" placeholder="Correo Electronico" name="correo">
                        <input type="text" id="usuario" placeholder="Usuario" name="usuario">
                        <input type="password" id="password" placeholder="Contraseña" name="password">
                        <button type="submit">Registrarse</button>
                    </form>
                </div>
        </div>

    </main>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="validacion_inicio.js"></script>
    <script src="assets/js/script.js"></script>
</html>