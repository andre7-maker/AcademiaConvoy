<?php

session_start();

include 'Conexion_Be.php';

$correo = $_POST['correo'];
$password = $_POST['password'];

$validar_login = mysqli_query($conexion, "SELECT * FROM iniciar_sesion 
WHERE correo='$correo' AND password='$password' ");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo;
    header ("location: ../views/inicio.php");
    exit;

}else{
    echo ' 
    <script>
        alert("Usuario no existe, por favor verifique sus credenciales");
        window.location = "../views/login.php";
    </script>
    ';
    exit;
}