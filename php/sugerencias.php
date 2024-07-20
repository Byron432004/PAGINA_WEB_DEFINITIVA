<?php
include 'conexion_be.php';

$query = "SELECT s.id_sugerencia, u.nombre AS nombre_usuario, s.comentario_sugerencia, s.fecha_sugerencia
          FROM sugerencias s
          JOIN usuarios u ON s.id_usuario = u.id_usuario";
$result = mysqli_query($conexion, $query);

$sugerencias = array();
while ($row = mysqli_fetch_assoc($result)) {
    $sugerencias[] = $row;
}

$_SESSION['sugerencias'] = $sugerencias;
?>
