<?php

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
            alert("Requiere iniciar sesión");
            window.location = "index.html";
        </script>
    ';
    session_destroy();
    die();
}

// Incluye el archivo de conexión
include 'conexion_be.php';

// Inicializa las variables
$nombres = $correo = "";

// Obtiene los datos del usuario si la sesión está iniciada
if (isset($_SESSION['usuario'])) {
    $correoUsuario = $_SESSION['usuario'];

    // Realiza una consulta SQL utilizando el correo del usuario
    $sql = "SELECT id_usuario, nombre, apellido, celular, correo FROM usuarios WHERE correo = '$correoUsuario'";
    $result = $conexion->query($sql);  // Cambiado de $conn a $conexion

    // Verifica si la consulta se ejecutó correctamente
    if ($result === false) {
        echo "Error en la consulta: " . mysqli_error($conexion);
    } else {
        // Verifica si se obtuvieron resultados
        if ($result->num_rows > 0) {
            // Asigna valores a las variables
            $row = $result->fetch_assoc();
            $id_usuario = $row['id_usuario'];
            $apellido = $row['apellido'];
            $nombres = $row['nombre'];
            $correo = $row['correo'];
            $cel = $row['celular'];
        } else {
            echo "No se encontraron resultados para el usuario $correoUsuario";
        }
    }

    $sql1 = "SELECT id_servicio, nombre_servicio, nombre_abogada FROM servicios WHERE id_servicio = 1";
    $result1 = $conexion->query($sql1);

    if ($result1 === false) {
        echo "Error en la consulta: " . mysqli_error($conexion);
    } else {
        // Verifica si se obtuvieron resultados
        if ($result1->num_rows > 0) {
            // Asigna valores a las variables
            $row = $result1->fetch_assoc();
            $id_servicio1 = $row['id_servicio'];
            $nombre_servicio = $row['nombre_servicio'];
            $nombre_abogada = $row['nombre_abogada'];
        } 
           else {
            echo "No se encontraron resultados para el servicio";
        }
    }



    

    $sql2 = "SELECT id_servicio, nombre_servicio, nombre_abogada FROM servicios WHERE id_servicio =2";
    $result2 = $conexion->query($sql2);

    if ($result2 === false) {
        echo "Error en la consulta: " . mysqli_error($conexion);
    } else {
        // Verifica si se obtuvieron resultados
        if ($result2->num_rows > 0) {
            // Asigna valores a las variables
            $row = $result2->fetch_assoc();
            $id_servicio2 = $row['id_servicio'];
            $nombre_servicio2 = $row['nombre_servicio'];
            $nombre_abogada2 = $row['nombre_abogada'];
        } 
           else {
            echo "No se encontraron resultados para el servicio";
        }
    }

    $sql3 = "SELECT id_servicio, nombre_servicio, nombre_abogada FROM servicios WHERE id_servicio =3";
    $result3 = $conexion->query($sql3);

    if ($result3 === false) {
        echo "Error en la consulta: " . mysqli_error($conexion);
    } else {
        // Verifica si se obtuvieron resultados
        if ($result3->num_rows > 0) {
            // Asigna valores a las variables
            $row = $result3->fetch_assoc();
            $id_servicio3 = $row['id_servicio'];
            $nombre_servicio3 = $row['nombre_servicio'];
            $nombre_abogada3 = $row['nombre_abogada'];
        } 
           else {
            echo "No se encontraron resultados para el servicio";
        }
    }

    $sql4 = "SELECT id_servicio, nombre_servicio, nombre_abogada FROM servicios WHERE id_servicio =4";
    $result4 = $conexion->query($sql4);

    if ($result4 === false) {
        echo "Error en la consulta: " . mysqli_error($conexion);
    } else {
        // Verifica si se obtuvieron resultados
        if ($result4->num_rows > 0) {
            // Asigna valores a las variables
            $row = $result4->fetch_assoc();
            $id_servicio4 = $row['id_servicio'];
            $nombre_servicio4 = $row['nombre_servicio'];
            $nombre_abogada4 = $row['nombre_abogada'];
        } 
           else {
            echo "No se encontraron resultados para el servicio";
        }
    }

}

// Cierra la conexión
$conexion->close();  // Cambiado de $conn a $conexion
?>
