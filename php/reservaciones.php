<?php
include 'conexion_be.php';

$query = "SELECT r.id_reservacion, r.id_usuario, s.nombre_servicio, r.asunto_reservacion, r.mensaje_reservacion, r.fecha
          FROM reservaciones r
          LEFT JOIN estado_reservacion e ON r.id_reservacion = e.id_reservacion AND e.estado = 'Confirmado'
          JOIN servicios s ON r.id_servicio = s.id_servicio
          WHERE e.id_reservacion IS NULL";
$result = mysqli_query($conexion, $query);

$reservaciones = array();
while ($row = mysqli_fetch_assoc($result)) {
    $reservaciones[] = $row;
}

$_SESSION['reservaciones'] = $reservaciones;
?>
