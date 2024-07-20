<?php
include 'conexion_be.php';

if (isset($_POST['id_reservacion'])) {
    $id_reservacion = $_POST['id_reservacion'];

    $query = "INSERT INTO estado_reservacion (id_reservacion, estado) VALUES ('$id_reservacion', 'Cancelado')";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        echo '
            <script>
                alert("Reservación cancelada exitosamente");
                window.location = "../mi_cuenta_adm.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Error al cancelar la reservación");
                window.location = "../mi_cuenta_adm.php";
            </script>
        ';
    }
}

mysqli_close($conexion);
?>
