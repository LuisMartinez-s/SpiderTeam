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
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="../img/ittepic.png" type="image/png" />
  <title>TecNM Tepic</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" href="../css/flaticon.css" />
  <link rel="stylesheet" href="../css/themify-icons.css" />
  <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css" />
  <!-- main css -->
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>



  <!--================Blog Area =================-->
  <section class="blog_area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="blog_left_sidebar">
            <article class="row blog_item">
              <div class="col-md-3">
                <div class="blog_info text-right">

                  <ul class="blog_meta list">
                    <li><a href="#">Luis Martínez<i class="ti-user"></i></a></li>
                    <li><a href="#">12 Dec, 2020<i class="ti-calendar"></i></a></li>
                    <li><a href="#">12:00<i class="ti-time"></i></a></li>
                    <li><a href="#">Facebook Live<i class="ti-location-pin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-9">
                <div class="blog_post">
                  <img src="../img/Jornada.jpg" alt="">
                  <div class="blog_details">
                    <a href="#">
                      <h2>JORNADA ACADEMICA 2020</h2>
                    </a>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Commodi atque odio libero veniam accusantium, sunt ullam reiciendis
                      facere perferendis ipsam.</p>
                   
                  </div>
                </div>
              </div>
            </article>
            <article class="row blog_item">
              <div class="col-md-3">
                <div class="blog_info text-right">
                  <ul class="blog_meta list">
                    <li><a href="#">Bryan Lopez<i class="ti-user"></i></a></li>
                    <li><a href="#">12 Dec, 2020<i class="ti-calendar"></i></a></li>
                    <li><a href="#">12:00<i class="ti-time"></i></a></li>
                    <li><a href="#">Facebook Live<i class="ti-location-pin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-9">
                <div class="blog_post">
                  <img src="../img/IA.jpg" alt="">
                  <div class="blog_details">
                    <a href="single-blog.html">
                      <h2>Inteligencia artificial</h2>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, dolorem aperiam optio quo excepturi sunt architecto quasi dicta facilis totam.</p>
                   
                  </div>
                </div>
              </div>
            </article>
            <article class="row blog_item">
              <div class="col-md-3">
                <div class="blog_info text-right">
                  <ul class="blog_meta list">
                    <li><a href="#">Jorge Perez<i class="ti-user"></i></a></li>
                    <li><a href="#">12 Dec, 2020<i class="ti-calendar"></i></a></li>
                    <li><a href="#">12:00<i class="ti-time"></i></a></li>
                    <li><a href="#">Facebook Live<i class="ti-location-pin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-9">
                <div class="blog_post">
                  <img src="../img/IGE.jpg" alt="">
                  <div class="blog_details">
                    <a href="single-blog.html">
                      <h2>Congreso IGE</h2>
                    </a>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      At neque suscipit consequatur. Asperiores vitae ad id adipisci
                      quia ratione placeat.</p>
                  
                  </div>
                </div>
              </div>
            </article>
            <article class="row blog_item">
              <div class="col-md-3">
                <div class="blog_info text-right">
                  <ul class="blog_meta list">
                    <li><a href="#">Ramon Ramirez<i class="ti-user"></i></a></li>
                    <li><a href="#">12 Dec, 2020<i class="ti-calendar"></i></a></li>
                    <li><a href="#">12:00<i class="ti-time"></i></a></li>
                    <li><a href="#">Facebook Live<i class="ti-location-pin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-9">
                <div class="blog_post">
                  <img src="../img/Deporte.jpg" alt="">
                  <div class="blog_details">
                    <a href="single-blog.html">
                      <h2>Finales de Torneos Internos Tec de Tepic</h2>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, debitis! Asperiores,
                      accusantium dolor. Iste molestiae ab quos accusantium assumenda in.</p>
                 
                  </div>
                </div>
              </div>
            </article>
            <article class="row blog_item">
              <div class="col-md-3">
                <div class="blog_info text-right">
                <ul class="blog_meta list">
                    <li><a href="#">Marco Ramirez<i class="ti-user"></i></a></li>
                    <li><a href="#">12 Dec, 2020<i class="ti-calendar"></i></a></li>
                    <li><a href="#">12:00<i class="ti-time"></i></a></li>
                    <li><a href="#">Facebook Live<i class="ti-location-pin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-9">
                <div class="blog_post">
                  <img src="../img/Clausura.jpg" alt="">
                  <div class="blog_details">
                    <a href="single-blog.html">
                      <h2>Clausura 2020</h2>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem laboriosam
                      quisquam eaque quam aperiam numquam voluptas molestiae provident unde ducimus.</p>
                   
                  </div>
                </div>
              </div>
            </article>
            <nav class="blog-pagination justify-content-center d-flex">
              <ul class="pagination">
                <li class="page-item">
                  <a href="#" class="page-link" aria-label="Previous">
                    <span aria-hidden="true">
                      <i class="ti-angle-left"></i>
                    </span>
                  </a>
                </li>
                <li class="page-item"><a href="#" class="page-link">01</a></li>
                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                <li class="page-item"><a href="#" class="page-link">03</a></li>
                <li class="page-item"><a href="#" class="page-link">04</a></li>
                <li class="page-item"><a href="#" class="page-link">05</a></li>
                <li class="page-item">
                  <a href="#" class="page-link" aria-label="Next">
                    <span aria-hidden="true">
                      <i class="ti-angle-right"></i>
                    </span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Blog Area =================-->


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
</body>
<?php
include('includes/pie.php');
?>

</html>