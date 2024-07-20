<?php
include 'conexion_be.php';

//include 'obtenerdatos.php';
/*
id_reservacion
id_usuario
id_servicio
asunto_reservacion
mensaje_reservacion
fecha
*/
// Recuperar datos del formulario
$id_usuario = $_POST['id_usuario'];
$id_servicio1 = $_POST['codigoservicio'];
$asunto_reservacion = $_POST['subject'];
$mensaje1 = $_POST['message'];
$fecha1 = $_POST['date'];

// Realizar la inserción en la tabla "pedidos"
$query = "INSERT INTO reservaciones (id_reservacion, id_usuario, id_servicio, asunto_reservacion, mensaje_reservacion, fecha)
          VALUES ('', '$id_usuario', '$id_servicio1', '$asunto_reservacion', '$mensaje1', '$fecha1')";

$resultado = mysqli_query($conexion, $query);

if($query > 0){
    echo '
        <script>
            alert("Su reservacion ha sido enviada con éxito");
            window.location = "../contacto_2.php";
        </script>
    ';
    exit(); //no ejecuta el codigo siguiente
}

mysqli_close($conexion);
?>
