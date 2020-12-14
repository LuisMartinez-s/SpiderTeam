<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SESSION["usuario"])) {
  include('includes/encabezado-admin.php');
} else {
  include('includes/encabezado.php');
}

?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <!-- Site Title-->
  <title>TecNM - Visitanos</title>

  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="img/ittepic.png" type="image/png" />
  <!-- Bootstrap CSS -->

  <!-- main css -->

  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,400italic%7CJosefin+Sans:400,700,300italic">
  <link rel="stylesheet" href="../css/bootstrapVisit.css">
  <link rel="stylesheet" href="../css/styleVisit.css">


  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>

<body>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
  <!-- Page Loader-->
  <div id="page-loader">
    <div class="page-loader-body">
      <div class="cssload-spinner">
        <div class="cssload-cube cssload-cube0"></div>
        <div class="cssload-cube cssload-cube1"></div>
        <div class="cssload-cube cssload-cube2"></div>
        <div class="cssload-cube cssload-cube3"></div>
        <div class="cssload-cube cssload-cube4"></div>
        <div class="cssload-cube cssload-cube5"></div>
        <div class="cssload-cube cssload-cube6"> </div>
        <div class="cssload-cube cssload-cube7"></div>
        <div class="cssload-cube cssload-cube8"></div>
        <div class="cssload-cube cssload-cube9"></div>
        <div class="cssload-cube cssload-cube10"></div>
        <div class="cssload-cube cssload-cube11"></div>
        <div class="cssload-cube cssload-cube12"></div>
        <div class="cssload-cube cssload-cube13"></div>
        <div class="cssload-cube cssload-cube14"></div>
        <div class="cssload-cube cssload-cube15"></div>
      </div>
    </div>
  </div>
  <!-- Page-->
  <div class="page">


    <!-- Mejores Fotos -->
    <section class="section text-center" style="margin-top: 10rem">
      <!-- Slick Carousel-->
      <div class="slick-wrap mt-7">
        <div class="slick-slider slick-style-1" data-arrows="true" data-autoplay="true" data-loop="true" data-dots="true" data-swipe="true" data-xs-swipe="true" data-sm-swipe="false" data-items="1" data-sm-items="3" data-md-items="3" data-lg-items="3" data-center-mode="true" data-lightgallery="group-slick">
          <div class="item">
            <div class="slick-slide-inner">
              <div class="slick-slide-caption"><a class="thumb-ann thumb-mixed_large" href="../images/group-image-4-1200x800-original.jpg" data-lightgallery="item"><img class="thumb-ann__image" src="../images/home1-1-961x664.jpg" alt="" width="961" height="664" />
                  <div class="thumb-ann__caption">
                    <p class="thumb-ann__title heading-3">Image #1</p>
                    <p class="thumb-ann__text">With the experience of more than 10 years, I am glad to offer you a wide variety of love story photography services at affordable prices.</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="slick-slide-inner">
              <div class="slick-slide-caption"><a class="thumb-ann thumb-mixed_large" href="../images/group-image-3-1200x800-original.jpg" data-lightgallery="item"><img class="thumb-ann__image" src="../images/home1-2-961x664.jpg" alt="" width="961" height="664" />
                  <div class="thumb-ann__caption">
                    <p class="thumb-ann__title heading-3">Image #2</p>
                    <p class="thumb-ann__text">With the experience of more than 10 years, I am glad to offer you a wide variety of love story photography services at affordable prices.</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="slick-slide-inner">
              <div class="slick-slide-caption"><a class="thumb-ann thumb-mixed_large" href="../images/home1-4-1200x695-original.jpg" data-lightgallery="item"><img class="thumb-ann__image" src="../images/home1-3-961x664.jpg" alt="" width="961" height="664" />
                  <div class="thumb-ann__caption">
                    <p class="thumb-ann__title heading-3">Image #3</p>
                    <p class="thumb-ann__text">With the experience of more than 10 years, I am glad to offer you a wide variety of love story photography services at affordable prices.</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="slick-slide-inner">
              <div class="slick-slide-caption"><a class="thumb-ann thumb-mixed_large" href="../images/group-image-2-1200x800-original.jpg" data-lightgallery="item"><img class="thumb-ann__image" src="../images/home1-4-961x664.jpg" alt="" width="961" height="664" />
                  <div class="thumb-ann__caption">
                    <p class="thumb-ann__title heading-3">Image #4</p>
                    <p class="thumb-ann__text">With the experience of more than 10 years, I am glad to offer you a wide variety of love story photography services at affordable prices.</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Formulario-->
    <section class="section section-md bg-white">
      <div class="shell">
        <div class="range range-50 range-sm-center range-md-left range-md-reverse range-md-middle">
          <div class="cell-sm-10 cell-md-6 wow fadeInRight">
            <div class="box-width-4 box-centered">
              <p class="heading-1">Programa <br> Tu Visita</p>
              <p>Puedes mandarnos tu solicitud para programar una visita al Instituto Tecnologico de Tepic, solo es custion de llenar el siguiente formulario :D</p>
            </div>
          </div>
          <div class="cell-sm-10 cell-md-6 wow fadeInLeft">
            <article class="box-line"><span></span><span></span><span></span><span></span>
              <div class="box-line__main">
                <!-- RD Mailform-->
                <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="enviarMail.php">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-date" type="text" data-time-picker="date" name="fecha" data-constraints="@Required">
                    <label class="form-label" for="contact-date">Fecha a visitar</label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input" id="Area" type="text" name="areaInteres" data-constraints="@Required">
                    <label class="form-label" for="Area">Area de interes</label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input" id="contact-name" type="text" name="nombreEscuela" data-constraints="@Required">
                    <label class="form-label" for="contact-name">Nombre de la escuela</label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input" id="encargado" type="text" name="nombreEncargado" data-constraints="@Required">
                    <label class="form-label" for="contact-name">Nombre del encargado</label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input" id="telefono" type="telephone" name="telefono" data-constraints="@Required">
                    <label class="form-label" for="contact-name">Telefono</label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                    <label class="form-label" for="contact-email">E-mail</label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input" id="totalA" type="number" max="50" name="totalAlum" data-constraints="@Required">
                    <label class="form-label" for="totalA">Total de alumnos</label>
                  </div>
                  <div class="form-wrap">
                    <label class="form-label" for="contact-message">Comentarios</label>
                    <textarea class="form-input" id="contact-message" name="comentarios" data-constraints="@Required"></textarea>
                  </div>
                  <div class="form-wrap form-button offset-1">
                    <input class="button button-block button-primary-outline button-ujarak" type="submit"></button>
                  </div>
                </form>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    


    -->
    <!-- Page Footer-->
    <!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 mb-1 mt-0  col-sm-12 footer-text m-0 text-white">

            Copyright &copy;
            <!-- <script>document.write(new Date().getFullYear());</script> --> Todos los derechos reservados <a href="https://www.tepic.tecnm.mx/" target="_blank">TecNm Campus Tepic</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          <div class="col-lg-4 col-sm-12 footer-social">
            <a href="#"><i class="ti-facebook"></i></a>

          </div>
        </div>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="../js/owl-carousel-thumb.min.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="../js/gmaps.min.js"></script>
    <script src="../js/theme.js"></script>

    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
    <!-- coded by Himic-->
</body>

</html>