<?php
session_start();

include('conexion_be.php');

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' AND pass='$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    $fila = mysqli_fetch_assoc($validar_login);
    $modo = $fila['modo'];
    $_SESSION['usuario'] = $correo;

    if ($modo == 1) {
        header("location: ../index_adm.php");
    } else {
        header("location: ../index_2.php");
    }
    exit();
} else {
    echo '
        <script>
            alert("Usuario no existente, vuelva a iniciar sesión");
            window.location = "../login.php";
        </script>
    ';
    exit();
}
?>
