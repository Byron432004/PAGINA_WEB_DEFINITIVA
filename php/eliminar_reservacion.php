<?php
include 'conexion_be.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_reservacion = $_POST['id_reservacion'];

    // Eliminar la reservación
    $query = "DELETE FROM reservaciones WHERE id_reservacion = ?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("i", $id_reservacion);

    if ($stmt->execute()) {
        echo '<script>
                alert("Reservación eliminada exitosamente");
                window.location = "../mi_cuenta_adm.php";
              </script>';
    } else {
        echo '<script>
                alert("Error al eliminar la reservación");
                window.location = "../mi_cuenta_adm.php";
              </script>';
    }

    $stmt->close();
    $conexion->close();
}
?>
