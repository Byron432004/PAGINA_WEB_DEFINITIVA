<?php
include 'conexion_be.php';

// Recuperar datos del formulario
$id_usuario = $_POST['id_usuario'];
$mensaje = $_POST['message'];
$fecha = $_POST['date'];

// Realizar la inserción en la tabla "pedidos"
$query = "INSERT INTO sugerencias (id_sugerencia, id_usuario, comentario_sugerencia, fecha_sugerencia)
          VALUES ('', '$id_usuario', '$mensaje', '$fecha')";

$resultado = mysqli_query($conexion, $query);

if($query > 0){
    echo '
        <script>
            alert("Su sugerencia ha sido enviada con éxito");
            window.location = "../sugerencias_2.php";
        </script>
    ';
    exit(); //no ejecuta el codigo siguiente
}

mysqli_close($conexion);
?>
