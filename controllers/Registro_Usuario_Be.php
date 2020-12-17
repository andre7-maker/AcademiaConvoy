<?php

    include 'Conexion_Be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //encriptamiento de claves
    $password = hash('sha512', $password);

    $query = "INSERT INTO iniciar_sesion(nombre_completo, correo, usuario, password) 
                VALUES('$nombre_completo', '$correo', '$usuario', '$password')";
    
    
    //Autenticacion de que el correo no se repita

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM iniciar_sesion 
    WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>

                alert("Este correo ya esta registrado, intenta con uno diferente");
                window.location = "../views/login.php";

            </script>
        ';
        exit();
    }

    //Autenticacion de que el nombre de usuario no se repita

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM iniciar_sesion 
    WHERE usuario='$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
        <script>

            alert("Este usuario ya esta registrado, intenta con uno diferente");
            window.location = "../views/login.php";

        </script>
    ';
    exit();
}




    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado correctamente");
                window.location = "../views/login.php";
            </script>
        ';

    }else{
        echo '
        <script>
            alert("Error al registrar un nuevo usuario, intentelo de nuevo");
            window.location = "../views/login.php";
        </script>
    ';
    }

    mysqli_close($conexion);

?>