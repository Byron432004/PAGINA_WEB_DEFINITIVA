<?php
include 'conexion_be.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_reservacion = $_POST['id_reservacion'];
    $estado = 'Confirmado';

    // Inserta en la tabla estado_reservacion
    $query = "INSERT INTO estado_reservacion (id_reservacion, estado) VALUES ('$id_reservacion', '$estado')";

    if (mysqli_query($conexion, $query)) {
        echo '<script>
            alert("La reservación ha sido aceptada con éxito");
            window.location = "../mi_cuenta_adm.php";
        </script>';


        
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conexion);
    }

    mysqli_close($conexion);
    // Redirecciona de vuelta a la página de administración
  //  header('Location: ../mi_cuenta_adm.php');
    exit();
}
?>