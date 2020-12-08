<?php
include('includes/encabezado.php');


?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>
  <!-- Site Title-->
  <title>TecNM - Galeria</title>
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
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
  </div>
  <!-- Page Loader-->
  <!--     <div id="page-loader">
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
    </div> -->
  <!-- Page-->


  <!-- Portfolio-->
  <section class="section section-md bg-white text-center">
    <div class="shell-fluid">
      <p class="heading-1">Galería</p>
      <div class="isotope thumb-ruby-wrap wow fadeIn" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
        <div class="row">
         
              <?php
                    include('crear_tarjetas.php');
                ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Page Footer-->
  <!--================ Start footer Area  =================-->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row footer-bottom d-flex justify-content-between">
        <p class="col-lg-8 mb-1 mt-0  col-sm-12 footer-text m-0 text-white">

          Copyright &copy;
          <script>
          
          </script> Todos los derechos reservados <a href="https://www.tepic.tecnm.mx/" target="_blank">TecNm Campus Tepic</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
        <div class="col-lg-4 col-sm-12 footer-social">
          <a href="#"><i class="ti-facebook"></i></a>

        </div>
      </div>
    </div>
  </footer>
  </div>
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