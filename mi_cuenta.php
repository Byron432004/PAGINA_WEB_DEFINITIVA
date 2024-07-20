<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
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
    
?>



<!DOCTYPE html>
<html lang="es">

<!--==========================

  PESTAÑA DE CONTACTOS

  ============================-->


<head>
  <meta charset="utf-8">
  <title>Mi cuenta - Asesoramiento Juridico</title>
  <link rel="icon" type="image/png" href="img/logo_pestañas.png">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style1.css" rel="stylesheet">

  <style>
    .login-button.cerra {
        background-color: #ff4d4d; /* Rojo para 'Cerrar Sesión' */
        color: white; /* Texto blanco */
    }
    .login-button.cuenta {
        background-color: #4CAF50; /* Verde para 'Mi cuenta' */
        color: white; /* Texto blanco */
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

 /*TABLA DE CONFIRMACION DE RESERVACIONES - DISEÑO CON FONDO BLANCO Y ELEMENTOS QUE RESALTAN*/
#confirmed-reservations .container {
    background-color: #ffffff; /* Fondo blanco para toda la sección */
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.1); /* Sombra más suave para un efecto sutil */
}

#confirmed-reservations .section-header h2 {
    color: #333333; /* Texto oscuro para contraste con el fondo blanco */
    font-size: 26px;
    text-transform: none;
    font-weight: bold;
    font-family: 'Roboto', sans-serif;
    text-shadow: none; /* Se elimina la sombra del texto para un aspecto más limpio */
}

#confirmed-reservations .table {
    color: #333333; /* Texto oscuro para mejor legibilidad */
    background-color: #f0f0f0; /* Fondo ligeramente gris para distinguir la tabla */
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
}

#confirmed-reservations .table th, #confirmed-reservations .table td {
    padding: 15px;
    border-bottom: 1px solid #cccccc; /* Bordes más sutiles */
    text-align: left;
    font-family: 'Roboto', sans-serif;
}

#confirmed-reservations .table th {
    background-color: #e6e6e6; /* Fondo de encabezado más claro */
    color: #333333; /* Texto oscuro para contraste */
    font-weight: bold;
}

#confirmed-reservations .table-striped tbody tr:nth-of-type(odd) {
    background-color: #f9f9f9; /* Alternando colores de fondo para filas, más claro */
}

#confirmed-reservations .table-striped tbody tr:hover {
    background-color: #eaeaea; /* Color al pasar el mouse, más claro */
}

#confirmed-reservations .btn-success, #confirmed-reservations .btn-danger {
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
    font-weight: bold;
    font-family: 'Roboto', sans-serif;
    color: #fff;
}

#confirmed-reservations .btn-success {
    background-color: #5cb85c; /* Verde más vibrante para resaltar sobre el fondo blanco */
}

#confirmed-reservations .btn-success:hover {
    background-color: #4cae4c; /* Verde al pasar el mouse, más oscuro */
    transform: translateY(-2px);
}

#confirmed-reservations .btn-danger {
    background-color: #d9534f; /* Rojo más vibrante para contraste */
}

#confirmed-reservations .btn-danger:hover {
    background-color: #c9302c; /* Rojo al pasar el mouse, más oscuro */
    transform: translateY(-2px);
}
  
</style>



</head>

<body>
  <div id="preloader"></div>


  <!--==========================
  Sección de encabezado
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="index.html"><img src="img/logo_bienvenida_transparente_2.png" alt="" title="" /></img></a>
        <!-- Descomenta abajo si prefieres usar una imagen de texto -->
        <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
      </div>


            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li><a href="index_2.php">Inicio</a></li>
                <li><a href="profesionales_2.php">Nosotros</a></li>
                <li><a href="servicios_2.php">Servicios</a></li>
                <li><a href="ubicacion_2.php">Horario de Atención y Ubicación</a></li>
                <li><a href="sugerencias_2.php">Sugerencias</a></li>
                <li><a href="contacto_2.php">Contactenos</a></li>
                <li><a href="mi_cuenta.php" class="login-button cuenta">Mi cuenta</a></li>
                <li><a href="php/cerrar_sesion.php" class="login-button cerra">Cerrar Sesion</a></li>


              </ul>
            </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->



  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">‎ </h3>
          <h3 class="section-title">Mi Perfil</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Aqui encontraras tu información con nosotros:</p>

          <h3 class="section-title"></h3>
          <h3 class="section-title"></h3>
        </div>
      </div>

  
      <div class="center-screen" style="text-align: left;">
        <div class="form">
          <h3 id="profile-header">Datos Personales:</h3>
          <div id="errormessage"></div>
          <form action="php/actualizar_perfil.php" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="hidden" name="id_usuario">
              <input type="text" name="name" value="<?php echo $nombres; ?>" readonly required class="form-control" id="name" placeholder="Nombre" required />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" value="<?php echo $apellido; ?>" readonly required name="lastname" class="form-control" id="lastname" placeholder="Apellido" required />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" name="cel" value="<?php echo $cel; ?>" readonly required class="form-control" id="cel" placeholder="Celular" required />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" name="correo" value="<?php echo $correo; ?>" readonly required class="form-control" id="correo" placeholder="Correo" required />
              <div class="validation"></div>
            </div>
          </form>
        </div>
      </div>
      <div class="center-screen_2">
          <br><br><br>
          <div class="center-screen_2">
       
            </div>
        </section>

        <section id="confirmed-reservations" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Registro de sus reservaciones</h2>
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
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'php/conexion_be.php';
                
                                if (!isset($_SESSION['id_usuario'])) {
                                } else 
                                    $id_usuario = $_SESSION['id_usuario'];
                
                                    $query = "SELECT estado_reservacion.id_confirmacion, reservaciones.id_reservacion, 
                                                 usuarios.nombre AS nombre_usuario, usuarios.apellido AS apellido_usuario, 
                                                 usuarios.celular, usuarios.correo, estado_reservacion.estado 
                                              FROM estado_reservacion 
                                              JOIN reservaciones ON estado_reservacion.id_reservacion = reservaciones.id_reservacion 
                                              JOIN usuarios ON reservaciones.id_usuario = usuarios.id_usuario
                                              WHERE reservaciones.id_usuario = $id_usuario";
                                $result = mysqli_query($conexion, $query);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
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




        </div>
      </div>
    </div>

      


    <h3 class="section-title"></h3>
    <h3 class="section-title"></h3>

  </section>

  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Estudio Jurídico - Asesoria Legal Integral</strong>. All Rights Reserved
          </div>
          <div class="credits">


          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

 <!-- <script src="contactform/contactform.js"></script> -->


</body>

</html>
