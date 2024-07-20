

<?php

    session_start();
    if(isset($_SESSION["usuario"])){
        header("location: index.php");
    }
?>


<!DOCTYPE html>
<html lang="es">

<!--==========================
m
  PESTAÑA DE INICIO

  ============================-->


<head>
  <meta charset="utf-8">
  <title>Inicio - Asesoramiento Juridico</title>
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
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img style="width:450px; height:175px;" src="img/logo_bienvenida_transparente_2.png" alt="ProOnliPc">
        </div>
        
        <h1>Bienvenido a tu Estudio Jurídico</h1>
        <h2>Te ofrecemos <span class="rotating">asesoria legal integral, ayuda en tramites notariales y judiciales,atención profesional y garantizada</span></h2>
        <div class="actions">
          <a href="#about" class="btn-get-started">Conocenos</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Sección de encabezado
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo_bienvenida_transparente_2.png" alt="" title="" /></img></a>
        <!-- Descomenta abajo si prefieres usar una imagen de texto -->
        <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Inicio</a></li>
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
  About Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Acerca de nosotros</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Nuestra firma legal se dedica a ofrecer soluciones innovadoras para guiarlo a través de los desafíos legales para una orientación jurídica precisa y accesible.</p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-6 col-md-push-6 about-content">
          <br><h2 class="about-title">Guiamos tu asesoria legal</h2>
          <div class="section-h2-divider"></div>
          <p class="about-text">
            En nuestro local de asesoría legal, ofrecemos un faro de conocimiento y experiencia para iluminar tu camino en el complejo mundo legal. Con nosotros, encontrarás orientación confiable y soluciones efectivas para tus necesidades legales, guiándote paso a paso hacia el éxito y la tranquilidad en tus asuntos legales.</b>
          </p>
          <h2 class="about-title">Misión</h2>
          <div class="section-h2-divider"></div>
          <p class="about-text">
            Nuestro estudio jurídico ofrece una asistencia jurídica profesional de nuestros miembros, brindando seguridad y confianza a través  de soluciones integrales y adecuadas a las necesidades de cada cliente, con el compromiso de éxito en   sus requerimientos.</b>
          </p>
          <h2 class="about-title">Visión</h2>
          <div class="section-h2-divider"></div>
          <p class="about-text">
            Ser líderes en Servicios Jurídicos, reconocido como tal por ofrecer asesoría, patrocinio y defensa legal de calidad y calidez, con resultados eficientes, cumpliendo siempre con las expectativas de nuestros clientes, en base a valores y principios fundamentales.</b>
          </p>
          <br>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Ofrecemos a nuestros usuarios</h3>
          <div class="section-title-divider"></div>
          <p class="section-description", style="font-size: 18px;">Nuestra misión es mejorar tu experiencia de viaje y garantizar que estés siempre bien informado</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-users"></i></div>
          <h4 class="service-title"><a href="">Asesoramiento Personalizado</a></h4>
          <p class="service-description", style="font-size: 16px;text-align: justify;">Comprometidos a guiar a nuestros usuarios por el camino correcto en sus procesos judiciales</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-book"></i></div>
          <h4 class="service-title"><a href="">Tramites Notariales</a></h4>
          <p class="service-description" style="font-size: 16px;text-align: justify;">Asesoramiento legal, representación en procedimientos judiciales, redacción de documentos legales y otros servicios relacionados con el ámbito legal.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-book"></i></div>
          <h4 class="service-title"><a href="">Tramites Judiciales</a></h4>
          <p class="service-description", style="font-size: 16px;text-align: justify;">Procesos legales llevados a cabo ante un tribunal, como presentar demandas, comparecer en audiencias, recopilar pruebas y cumplir con los requisitos legales establecidos para resolver disputas y asuntos legales.</p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Subscrbe Section
  ============================-->
  <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title">¿Necesitas mas informacion?</h3>
          <p class="subscribe-text">Contacta con nosotros para poder cubrir todas tus dudas</p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
          <a class="subscribe-btn" href="contacto.html">Contactar</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Porfolio Section
  ============================-->




  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Noticias y Novedades Legales</h3>
          <div class="section-title-divider"></div>
          <p class="section-description", style="font-size: 18px;">Mantente informado sobre las últimas noticias y acontecimientos relacionados al mundo judicial</p>
        </div>
      </div>


        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/noticia_1.jpg);" href="https://www.eluniverso.com/noticias/politica/cambios-para-segundo-debate-del-proyecto-de-ley-de-seguridad-digital-en-ecuador-preocupa-a-gremios-nota/" target="_blank">
            <div class="details">
              <h4>Proyecto de ley de Seguridad Digital </h4>
              <span>¿Qué preocupa a los gremios?</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/noticia_2.jpg);" href="https://insightcrime.org/es/noticias/elites-criminales-tuercen-leyes-eludir-justicia-ecuador/" target="_blank">
            <div class="details">
              <h4>¿Cómo las élites criminales manipulan las leyes para eludir la justicia en Ecuador?</h4>
              <span>Ecuador en una batalla contra el crimen</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/noticia_3.jpg);" href="https://insightcrime.org/es/noticias/caso-metastasis-destapa-cancer-corrupcion-ecuador/" target="_blank">
            <div class="details">
              <h4>El caso Metástasis destapa el cáncer de la corrupción en Ecuador</h4>
              <span>La corrupción manchando al país</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/noticia_4.jpg);" href="https://www.prensa-latina.cu/2024/05/08/iva-bajara-al-ocho-por-ciento-en-proximo-feriado-en-ecuador/" target="_blank">
            <div class="details">
              <h4>IVA bajará al ocho por ciento en próximo feriado en Ecuador</h4>
              <span>Del 15% al 8%</span>
            </div>
          </a>
        </div>

      </div>
    </div>
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

  <script src="contactform/contactform.js"></script>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1142053847830194"
       crossorigin="anonymous"></script>
       <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1142053847830194"
            crossorigin="anonymous"></script>
</body>

</html>
