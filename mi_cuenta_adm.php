<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
            alert("Requiere iniciar sesión");
            window.location = "login.php";
        </script>
    ';
    session_destroy();
    die();
}

include 'php/obtenerdatos.php';
include 'php/reservaciones.php';
include 'php/confirmar_reservacion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Administración de Reservaciones</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/logo_bienvenida_transparente_2.png" rel="icon">
    <link href="img/logo_bienvenida_transparente_2.png" rel="apple-touch-icon">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">

    <style>
        .table td, .table th {
            word-wrap: break-word;
            max-width: 200px; /* Ajusta el valor según tus necesidades */
        }

        .login-button.cerra {
        background-color: #ff4d4d; /* Rojo para 'Cerrar Sesión' */
        color: white; /* Texto blanco */
    }
    .login-button.cuenta {
        background-color: #4CAF50; /* Verde para 'Mi cuenta' */
        color: white; /* Texto blanco */
    }

    .table-responsive {
    overflow-x: auto;
    }
    /* RESPONSIVE */

    @media (max-width: 768px) {
    .btn {
        padding: 5px 5px;
        font-size: 12px;
    }
    }

    @media (max-width: 576px) {

    .btn {
        padding: 5px 5px;
        font-size: 10px;
    }
    }

    /*TABLAS */

    #admin-reservations .container {
    background-color: #f0f0f3; /* Color más pastel y formal para el fondo */
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 20px #d0d0d2; /* Sombra más suave */
}

#admin-reservations .section-header h2 {
    color: #707078; /* Color más pastel y formal para los títulos */
    font-size: 24px;
    text-transform: uppercase;
    text-shadow: none; /* Se elimina el brillo */
}

#admin-reservations .section-header p {
    color: #a0a0a3; /* Color más suave para el texto */
}

#admin-reservations .table {
    color: #505053; /* Color más oscuro para el texto, manteniendo la formalidad */
    background-color: #e0e0e3; /* Fondo más claro y pastel para la tabla */
    border-collapse: separate;
    border-spacing: 0;
    width: 100%;
}

#admin-reservations .table th, #admin-reservations .table td {
    padding: 10px;
    border-bottom: 1px solid #c8c8ca; /* Borde más claro */
}

#admin-reservations .table th {
    background-color: #d0d0d3; /* Fondo más claro y formal para los encabezados */
    text-shadow: none; /* Se elimina el brillo */
}

#admin-reservations .table-striped tbody tr:nth-of-type(odd) {
    background-color: #e0e0e3; /* Alternancia de colores más suave */
}

#admin-reservations .table-striped tbody tr:hover {
    background-color: #d0d0d3; /* Color al pasar el mouse más suave */
}

#admin-reservations .btn-success {
    background-color: #98cb98; /* Color más pastel para el botón de éxito */
    border: none;
    padding: 5px 10px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

#admin-reservations .btn-success:hover {
    background-color: #88bb88; /* Color al pasar el mouse más suave */
}

#admin-reservations .btn-danger {
    background-color: #e98d8d; /* Color más pastel para el botón de peligro */
    border: none;
    padding: 5px 10px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

#admin-reservations .btn-danger:hover {
    background-color: #d97c7c; /* Color al pasar el mouse más suave */
}

/*TABLA DE CONFIRMACIONES*/

#confirmed-reservations .container {
    background-color: #f0f0f3;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 20px #d0d0d2;
}

#confirmed-reservations .section-header h2 {
    color: #707078;
    font-size: 24px;
    text-transform: uppercase;
    text-shadow: none;
}

#confirmed-reservations .section-header p {
    color: #a0a0a3;
}

#confirmed-reservations .table {
    color: #505053;
    background-color: #e0e0e3;
    border-collapse: separate;
    border-spacing: 0;
    width: 100%;
}

#confirmed-reservations .table th, #confirmed-reservations .table td {
    padding: 10px;
    border-bottom: 1px solid #c8c8ca;
}

#confirmed-reservations .table th {
    background-color: #d0d0d3;
    text-shadow: none;
}

#confirmed-reservations .table-striped tbody tr:nth-of-type(odd) {
    background-color: #e0e0e3;
}

#confirmed-reservations .table-striped tbody tr:hover {
    background-color: #d0d0d3;
}

#confirmed-reservations .btn-success {
    background-color: #98cb98;
    border: none;
    padding: 5px 10px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

#confirmed-reservations .btn-success:hover {
    background-color: #88bb88;
}

#confirmed-reservations .btn-danger {
    background-color: #e98d8d;
    border: none;
    padding: 5px 10px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

#confirmed-reservations .btn-danger:hover {
    background-color: #d97c7c;
}


    </style>
</head>

<body>
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <a href="index.html"><img src="img/logo_bienvenida_transparente_2.png" alt="Logo" title="" /></img></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="index_adm.php">Inicio</a></li>
                    <li><a href="profesionales_2adm.php">Nosotros</a></li>
                    <li><a href="servicios_2adm.php">Servicios</a></li>
                    <li><a href="ubicacion_2adm.php">Horario de Atención y Ubicación</a></li>
                    <li><a href="mi_cuenta_adm.php">Gestionar reservaciones</a></li>
                    <li><a href="mi_cuenta2.php" class="login-button cuenta">Mi cuenta</a></li>  
                    <li><a href="php/cerrar_sesion.php" class="login-button cerra">Cerrar Sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main">
        <br><br>
        <section id="admin-reservations" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Administración de Reservaciones</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID Reservación</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Celular</th>
                                    <th>Correo</th>
                                    <th>Servicio</th>
                                    <th>Asunto</th>
                                    <th>Mensaje</th>
                                    <th>Fecha de la reservación</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'php/conexion_be.php';
                                $query = "SELECT reservaciones.id_reservacion, usuarios.nombre AS nombre_usuario, usuarios.apellido AS apellido_usuario, usuarios.celular, usuarios.correo, servicios.nombre_servicio, reservaciones.asunto_reservacion, reservaciones.mensaje_reservacion, reservaciones.fecha 
                                          FROM reservaciones 
                                          JOIN usuarios ON reservaciones.id_usuario = usuarios.id_usuario 
                                          JOIN servicios ON reservaciones.id_servicio = servicios.id_servicio
                                          LEFT JOIN estado_reservacion ON reservaciones.id_reservacion = estado_reservacion.id_reservacion
                                          WHERE estado_reservacion.estado IS NULL";
                                $result = mysqli_query($conexion, $query);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id_reservacion'] . "</td>";
                                    echo "<td>" . $row['nombre_usuario'] . "</td>";
                                    echo "<td>" . $row['apellido_usuario'] . "</td>";
                                    echo "<td>" . $row['celular'] . "</td>";
                                    echo "<td>" . $row['correo'] . "</td>";
                                    echo "<td>" . $row['nombre_servicio'] . "</td>";
                                    echo "<td>" . $row['asunto_reservacion'] . "</td>";
                                    echo "<td>" . $row['mensaje_reservacion'] . "</td>";
                                    echo "<td>" . $row['fecha'] . "</td>";
                                    echo "<td><form method='POST' action='php/confirmar_reservacion.php'><input type='hidden' name='id_reservacion' value='" . $row['id_reservacion'] . "'><button type='submit' class='btn btn-success' style='background-color: #21fb4e; color: white; border: none; padding: 10px 10px; border-radius: 5px; cursor: pointer;' >Confirmar</button></form></td>";
                                    echo "<td><form method='POST' action='php/cancelar_reservacion.php'><input type='hidden' name='id_reservacion' value='" . $row['id_reservacion'] . "'><button type='submit' class= 'btn btn-alert' style='background-color: #FFA500; color: white; border: none; padding: 10px 10px; border-radius: 5px; cursor: pointer;'>Cancelar</button></form></td>";
                                    echo "<td><form method='POST' action='php/eliminar_reservacion.php'><input type='hidden' name='id_reservacion' value='" . $row['id_reservacion'] . "'><button type='submit' class='btn btn-danger' style='background-color: #FF0000; color: white; border: none; padding: 10px 10px; border-radius: 5px; cursor: pointer;' >Eliminar</button></form></td>";
                                    echo "</tr>";
                                }

                                mysqli_close($conexion);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </section>
                                <br><br><br>
        <section id="confirmed-reservations" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Registro de las Reservaciones</h2>
                    <p>Lista de todas las reservaciones</p>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID Confirmación</th>
                                    <th>ID Reservación</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Celular</th>
                                    <th>Correo</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'php/conexion_be.php';
                                $query = "SELECT estado_reservacion.id_confirmacion, reservaciones.id_reservacion, usuarios.nombre AS nombre_usuario, usuarios.apellido AS apellido_usuario, usuarios.celular, usuarios.correo, estado_reservacion.estado 
                                          FROM estado_reservacion 
                                          JOIN reservaciones ON estado_reservacion.id_reservacion = reservaciones.id_reservacion 
                                          JOIN usuarios ON reservaciones.id_usuario = usuarios.id_usuario";
                                $result = mysqli_query($conexion, $query);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id_confirmacion'] . "</td>";
                                    echo "<td>" . $row['id_reservacion'] . "</td>";
                                    echo "<td>" . $row['nombre_usuario'] . "</td>";
                                    echo "<td>" . $row['apellido_usuario'] . "</td>";
                                    echo "<td>" . $row['celular'] . "</td>";
                                    echo "<td>" . $row['correo'] . "</td>";
                                    echo "<td>" . $row['estado'] . "</td>";
                                    echo "</tr>";
                                }

                                mysqli_close($conexion);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>

    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Derechos Reservados <strong>Estudio Jurídico</strong>
            </div>
        </div>
    </footer>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <script src="contactform/contactform.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
