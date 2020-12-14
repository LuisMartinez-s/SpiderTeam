<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    
    if(isset($_SESSION["usuario"])){        
        include('includes/encabezado-admin.php');
    }
    else{
        include('includes/encabezado.php');
    }   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/flaticon.css" />
    <link rel="stylesheet" href="../css/themify-icons.css" />
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>


    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Oferta educativa</h2>
                        <p>
                            Conoce las carreras que ofertamos en nuestra institución.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single course -->
                <div class="col-lg-12">
                    <div class="owl-carousel active_course">
                        <div class="single_course">
                            <div class="course_head">
                                <img class="img-fluid" src="../img/courses/arq.jpg" alt="" />
                            </div>
                            <div class="course_content">

                                <h4 class="mb-3 text-center">
                                    <a href="course-details.php">Arquitectura</a>
                                </h4>
                                <p class="text-justify">
                                El arquitecto es el profesional que se encarga de proyectar, diseñar, dirigir la construcción y el mantenimiento de edificios, urbanizaciones, ciudades y estructuras de diverso tipo. Su arte se basa en reflexionar sobre conceptos del habitar bajo necesidades sociales.
                                </p>

                            </div>
                        </div><!--fin Tarjeta> <!-->

                        <div class="single_course">
                            <div class="course_head">
                                <img class="img-fluid" src="../img/courses/ibq.jpg" alt="" />
                            </div>
                            <div class="course_content">


                                <h4 class="mb-3">
                                    <a href="course-details.php">Ingenieria Bioquimica</a>
                                </h4>
                                <p>
                                El ingeniero bioquímico es un profesional capaz de dirigir, planear, organizar, diseñar, supervisar, evaluar, asesorar, y controlar procesos productivos en la industria de sistemas biológicos (industria alimentaria, biotecnológica y de servicios ambientales), y ámbitos relacionados.
                                </p>

                            </div>
                        </div><!--fin Tarjeta> <!-->

                        <div class="single_course">
                            <div class="course_head">
                                <img class="img-fluid" src="../img/courses/ic.jpg" alt="" />
                            </div>
                            <div class="course_content">
                                <h4 class="mb-3">
                                    <a href="course-details.php">Ingeniería Civil</a>
                                </h4>
                                <p>
                                La Ingeniería Civil es la rama que se encarga del diseño, construcción y mantenimiento de infraestructuras como carreteras, ferrocarriles, puentes, canales, presas, puertos, aeropuertos y demás, las cuales transformarán las ciudades.
                                </p>

                            </div>
                        </div><!--fin Tarjeta> <!-->


                        <div class="single_course">   <!--inicio Tarjeta ><!-->
                         
                            <div class="course_head">
                                <img class="img-fluid" src="../img/courses/ie.jpg" alt="" />
                            </div>
                            <div class="course_content">
                                
                                <h4 class="mb-3">
                                    <a href="course-details.php">Ingeniería Electrica</a>
                                </h4>
                                <p>
                                La ingeniería eléctrica es el campo de la ingeniería que se ocupa del estudio y la aplicación de la electricidad, electromagnetismo, y la electrónica. Los ingenieros eléctricos diseñan sistemas eléctricos de potencia y tecnologías que usan energía eléctrica.
                                </p>
                               
                            </div>
                        </div><!--fin Tarjeta> <!-->

                        <div class="single_course"><!--inicio Tarjeta ><!-->
                            <div class="course_head">
                                <img class="img-fluid" src="../img/courses/ige.jpg" alt="" />
                            </div>
                            <div class="course_content">
                               
                                <h4 class="mb-3">
                                    <a href="course-details.php">Ingeniería en gestión empresarial</a>
                                </h4>
                                <p>
                                El Ingeniero en Gestión Empresarial podrá desempeñar eficientemente funciones derivadas del área de producción, finanzas, recursos humanos, mercadotecnia y auditoría, asimismo podrá fungir como asesor o consultor de empresas, encargarse de la administración y gestión de empresas, públicas y privadas.
                                </p>
                                
                            </div>
                        </div> <!--fin Tarjeta> <!-->


                        <div class="single_course"><!--inicio Tarjeta ><!-->
                           
                            <div class="course_head">
                                <img class="img-fluid" src="../img/courses/ind.jpeg" alt="" />
                            </div>
                            <div class="course_content">
                               
                                <h4 class="mb-3">
                                    <a href="course-details.php">Ingenieria Industrial</a>
                                </h4>
                                <p>
                                La ingeniería industrial es una de las ramas de la ingeniería, y se ocupa de la optimización de uso de recursos humanos, técnicos e informativos, así como el manejo y gestión óptimos de los sistemas de transformación de bienes y servicios, evaluación de sistemas integrados aplicados en campos de personal.
                                </p>
                              
                            </div>
                        </div><!--fin Tarjeta> <!-->

                        <div class="single_course"><!--inicio Tarjeta ><!-->
                            
                            <div class="course_head">
                                <img class="img-fluid" src="../img/courses/imec.jpg" alt="" />
                            </div>
                            <div class="course_content">
                             
                                <h4 class="mb-3">
                                    <a href="course-details.php">Ingeniería Mecatrónica</a>
                                </h4>
                                <p>
                                Los ingenieros en mecatrónica trabajan principalmente en el desarrollo de máquinas inteligentes y procesos de automatización, desde el diseño y las pruebas de funcionamiento, hasta la fabricación final.
                                </p>
                               
                            </div>
                        </div> <!--fin Tarjeta> <!-->

                        <div class="single_course"><!--inicio Tarjeta ><!-->
                    
                            <div class="course_head">
                                <img class="img-fluid" src="../img/courses/iq.jpg" alt="" />
                            </div>
                            <div class="course_content">
                               
                                <h4 class="mb-3">
                                    <a href="course-details.php">Ingeniería Química</a>
                                </h4>
                                <p>
                                Un ingeniero químico estudia los materiales de cara a transformarlos en productos para el consumo. Estos profesionales trabajan sobre todo en laboratorios, investigando las propiedades de las sustancias.
                                </p>
                               
                            </div>
                        </div> <!--fin Tarjeta> <!-->

                        <div class="single_course"><!--inicio Tarjeta ><!-->
                          
                            <div class="course_head">
                                <img class="img-fluid" src="../img/courses/isc.jpg" alt="" />
                            </div>
                            <div class="course_content">
                                
                                <h4 class="mb-3">
                                    <a href="course-details.php">Ingeniería en Sistemas Computacionales</a>
                                </h4>
                                <p>
                                Los Ingenieros de Sistemas son especialistas en la búsqueda, diseño, evaluación, integración y mantenimiento de aplicaciones software, ambientes técnicos, sistemas operativos, software integrado, depósito de datos y software de telecomunicaciones.
                                </p>
                               
                            </div>
                        </div> <!--fin Tarjeta> <!-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Popular Courses Area =================-->

   
    
   
   
</body>
 <?php
 include('includes/footer.php');

?>
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
</html>