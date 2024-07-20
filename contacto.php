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
    
?>

<!DOCTYPE html>
<html lang="es">

<!--==========================

  PESTAÑA DE CONTACTOS

  ============================-->


<head>
  <meta charset="utf-8">
  <title>Contactos - Asesoramiento Juridico</title>
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
        <a href="index.html"><img src="img/logo_bienvenida_transparente_2.png" alt="" title="" class="logo-responsive"/></a>
        <!-- Descomenta abajo si prefieres usar una imagen de texto -->
        <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
      </div>

      

            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li><a href="index_2.php">Inicio</a></li>
                <li><a href="profesionales.html">Nosotros</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="ubicacion.html">Horario de Atención y Ubicación</a></li>
                <li><a href="sugerencias.php">Sugerencias</a></li>
                <li><a href="contacto.php">Contactenos</a></li>
                <li><a href="login.php" class="login-button acceder">Iniciar Sesión</a></li>

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
          <h3 class="section-title">Contactenos</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Siempre dispuestos a resolver sus dudas y guiarlos por el mejor camino </p>

          <h3 class="section-title"></h3>
          <h3 class="section-title"></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3 col-md-push-2">
          <div class="info futuristic-style">
            <div>
              <h4>Dirección</h4>
              <i class="fa fa-map-marker"></i>
              <p style="color: aliceblue;">Av. 11 de Noviembre <br>Riobamba, Ec 060104</p>
            </div>

            <div>
              <h4 style="color: aliceblue;">Abg. Damaris Cortez Razo</h4>
              <i class="fa fa-envelope"></i>
              <p style="color: aliceblue;">abogadadc10@gmail.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p style="color: aliceblue;">0995797598</p>
            </div>


            <div>
              <h4 style="color: aliceblue;">Abg. Silvia Gissela Maya</h4>
              <i class="fa fa-envelope"></i>
              <p style="color: aliceblue;">sgissemg75@hotmail.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p style="color: aliceblue;">0994884368</p>
            </div>

          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-5 col-md-push-2">
          <div class="form">
            <h3 id="inge">Agenda una cita</h3>
            <div id="sendmessage">Su mensaje fue enviado. Gracias por contactarnos!</div>
            <div id="errormessage"></div>
            <form action="php/registro_contacto.php" method="post" role="form" class="contactForm">
              <div class="form-group">
              <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">

                <input type="text" name="name" value="<?php echo $nombres; ?>" readonly required class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="tel" name="tele" value="<?php echo $cel; ?>" readonly required class="form-control" id="tele" placeholder="Celular" data-rule="minlen:1" data-msg="Ingresa un número telefonico valido" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" value="<?php echo $correo; ?>" readonly required name="email" id="email" placeholder="Correo" data-rule="email" data-msg="Ingresa un Correo Valido" />
                <div class="validation"></div><br> <br>
                <p>Servicio que requiere:</p>
                <select name="codigoservicio" id="input-text">
            <option value="<?php echo $id_servicio1?>"><?php echo $nombre_servicio?></option>
            <option value="<?php echo $id_servicio2?>"><?php echo $nombre_servicio2?></option>
            <option value="<?php echo $id_servicio3?>"><?php echo $nombre_servicio3?></option>
            <option value="<?php echo $id_servicio4?>"><?php echo $nombre_servicio4?></option>
        </select><br><br>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres del tema" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Mensaje"></textarea>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="date" name="date" class="form-control" id="date" placeholder="Fecha" data-rule="required" data-msg="Por favor seleccione una fecha" />
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
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



</body>

</html>
