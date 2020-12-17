<!-- <?php

// session_start();

// if(isset($_SESSION['usuario'])){
//     header("location: inicio.php");
// }

?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion y registro</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/estilos.css">
</head>
<body>

    <!--Cajas de presentacion-->

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>

            <!--Formulario de iniciar sesion y de registro-->
            <div class="contenedor__login-register">

                <!--Formulario de iniciar sesion-->
                <form action="../controllers/Login_Usuario_Be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electrónico" name="correo">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Entrar</button>
                </form>

                <!--Formulario de registro-->
                <form action="../controllers/Registro_Usuario_Be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="email" placeholder="Correo Electrónico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Registrarse</button>
                    
                </form>

            </div>
        </div>
    </main>

<script src="../assets/js/scriipt.js"></script>
</body>
</html>