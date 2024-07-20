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
include 'php/sugerencias.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Mi cuenta - Asesoramiento Juridico</title>
  <link rel="icon" type="image/png" href="img/logo_pestañas.png">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="favicon.ico" rel="shortcut icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet">

  <style>
    .login-button.cerra {
        background-color: #ff4d4d;
        color: white;
    }
    .login-button.cuenta {
        background-color: #4CAF50;
        color: white;
    }

    /*RESPONSIVE*/
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

    
  </style>
</head>

<body>
  <div id="preloader"></div>

  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="index.html"><img src="img/logo_bienvenida_transparente_2.png" alt="" title="" /></a>
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
          <div class="form">
            <h3 id="profile-header">Sugerencias:</h3>
            <div id="errormessage"></div>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Usuario</th>
                    <th>Comentario</th>
                    <th>Fecha</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  if (isset($_SESSION['sugerencias'])) {
                    foreach ($_SESSION['sugerencias'] as $sugerencia) {
                      echo "<tr>";
                      echo "<td>" . $sugerencia['nombre_usuario'] . "</td>";
                      echo "<td>" . $sugerencia['comentario_sugerencia'] . "</td>";
                      echo "<td>" . $sugerencia['fecha_sugerencia'] . "</td>";
                      echo "</tr>";
                    }
                  }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Estudio Jurídico - Asesoria Legal Integral</strong>. All Rights Reserved
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>
