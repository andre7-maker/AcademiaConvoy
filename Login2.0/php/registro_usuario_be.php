<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //Encriptamiento de contraseña
    $password = hash('sha512', $password);

    $query = "INSERT INTO iniciar_sesion(nombre_completo, correo, usuario, password)
            VALUES('$nombre_completo', '$correo', '$usuario', '$password')";

//Verificar que los correos no se repitan en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM iniciar_sesion
    WHERE correo ='$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../index.php"
            </script>
        ';
        exit();
    }

//Verificar que los usuarios no se repitan en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM iniciar_sesion
    WHERE usuario ='$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este usuario ya esta registrado, intenta con otro diferente");
                window.location = "../index.php"
            </script>
        ';
        exit();
    }

//-------------------------------------------------------------------------------------

//Mensajes de alerta
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php"
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de neuvo, usuario no almacenado");
                window.location = "../index.php"
            </script>
        ';
    }

    mysqli_close($conexion);
?>