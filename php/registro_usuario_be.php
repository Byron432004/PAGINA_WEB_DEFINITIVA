<?php

    include 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $rcontrasena = $_POST['rcontrasena'];


        $query = "INSERT INTO usuarios(id_usuario, nombre, apellido, celular, correo, pass, modo) 
                values ('', '$nombre', '$apellidos', '$celular', '$correo', '$contrasena', '')";

    //Verificacion de correo
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Correo ya existente, intente con uno diferente");
                window.location = "../login.php";
            </script>
        ';
        exit(); //no ejecuta el codigo siguiente
    }

    $verificar_nombre = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre = '$nombre'");

    if(mysqli_num_rows($verificar_nombre) > 0){
        echo '
            <script>
                alert("El nombre y los apellidos ya están registrados");
                window.location = "../login.php";
            </script>
        ';
        exit(); //no ejecuta el codigo siguiente
    }


    //registro
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "../login.php";
        </script>
        ';
    }else{ 
        echo '
        <script>
            alert("Error en el registro, vuelva a registrarse nuevamente");
            window.location = "../login.php";
        </script>
        ';
    }
    

    mysqli_close($conexion);
?>