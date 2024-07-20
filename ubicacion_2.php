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

  PESTAÑA DE UBICACION Y HORARIO DE ATENCIÓN

  ============================-->


<head>
  <meta charset="utf-8">
  <title>Horarios de Atención - Asesoramiento Jurídica</title>
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
  <link href="css/style4.css" rel="stylesheet">
  <link href="css/estilopopup.css" rel="stylesheet" >

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
  primera Section
  ============================-->
 
  
      
      <div class="row-independent">
        <!-- Nueva división para la imagen -->
        <div class="col-md-6">
          <img src="img/foto_local.jpg" alt="Foto del local" class="about-image">
        </div>
        <div class="col-md-6 about-content">
          <h2 class="about-title" style="color: black;">Horarios</h2>
          <div class="section-h2-divider"></div>
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action" style="font-size: 18px; color: rgb(64, 64, 64);">Lunes 8:30 AM - 17:00 PM</a>
            <a href="#" class="list-group-item list-group-item-action" style="font-size: 18px; color: rgb(64, 64, 64);">Martes 8:30 AM - 17:00 PM</a>
            <a href="#" class="list-group-item list-group-item-action" style="font-size: 18px; color: rgb(64, 64, 64);">Miércoles 8:30 AM - 17:00 PM</a>
            <a href="#" class="list-group-item list-group-item-action" style="font-size: 18px; color: rgb(64, 64, 64);">Jueves 8:30 AM - 17:00 PM</a>
            <a href="#" class="list-group-item list-group-item-action" style="font-size: 18px; color: rgb(64, 64, 64); ">Viernes 8:30 AM - 17:00 PM</a>
          </div>
        </div>
      </div>
    

  <div class="row row-independent">
    <!-- Nueva división para la imagen -->
    <div class="col-md-6">
      <img src="img/ubicacion.png" alt="Foto de mapa" class="about-image">
   </div>
   <div class="col-md-6 about-content">
     <h2 class="about-title" style="color: black;">Ubicación</h2>
     <div class="section-h2-divider"></div>
     <p class="about-text" style="font-size: 18px;">
        
      <br>
      <p class="about-text direccion-texto" style="font-size: 18px;">
        <strong style="color: black;">Dirección:</strong> <span style="color: rgb(64, 64, 64);">Calles Vicente Rocafuerte entre Vicente Madonado
          y Oscar Efren Reyes junto a la tienda de Ropa "PENTAGONO" CON DOS GRADAS DE COLOR AZUL AL INGRESO </span>
      </p>
    <p class="about-text" style="font-size: 18px;">
      <strong style="color: black;">Teléfono:</strong> <span style="color: rgb(64, 64, 64);">099 488 4368 - 099 579 7598</span>
    </p>
   </div>
</div>

 

  
  
     <!--==========================
    <div class="title-cards">
      <h1>Bienvenido</h1>
      <img style="width:500px; height:200px;" src="img/logo_bienvenida_transparente.jpg" alt="Próximamente Habilitada">
      <h1> </h1>


        <h2>Horario</h2>
    	</div>
  
      ============================-->  

<!-- ... AQUI EMPIEZAN LAS VENTANAS MODALES ... -->
 <!--==========================
<div id="ventanaModal1" class="modal">
<div class="contenido-modal">

<center>
<h2>Horario</h2>
        <h4>Lunes – viernes</h4>

        <dl>
          <dt>Desde:</dt>
          <dd>08:30 AM</dd>
          <dt>Hasta</dt>
          <dd>17:00 PM</dd>

  </center>
  <h2> </h2>
<button class="cerrar-modal cerrar-modal1">Cerrar</button>
</div>
</div>
 ============================-->


<!-- ... CIERRE DE LAS VENTANAS MODAl ... -->
 <!--==========================

    <div class="container-card">

    <div class="card">
    	<figure>
    		<img src="img/logo_bienvenida_transparente.jpg">
    	</figure>
    	<div class="contenido-card">
        <h2> </h2>
        <h2>Horario</h2>



    <button class="abrir-modal" id="abrirModal1">Visualizar Horario</button>

<a href="ubicacion.html">
<div class="botones-container">
  <span>Visualizar Ubicación</span>
</div>
</a>
<dl>
</dl>
    	</div>
    </div>
      </div>
    </div>
      </div>
      ============================-->

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
  <script src="js/popup.js"></script>
  <script src="contactform/contactform.js"></script>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1142053847830194"
       crossorigin="anonymous"></script>

</body>

</html>
