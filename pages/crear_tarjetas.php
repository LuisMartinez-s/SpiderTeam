<?php
    include("includes/utilerias.php");     

    // Conexión a la BD
    $conexion = conectar();


    // Sentencia para la consulta
    $sql = "select * from imagenes";

    // Ejecutar la sentencia
    $resultado = mysqli_query($conexion, $sql);

    // Si hubo algún error
    if(!$resultado){
        echo 'Error: ' . mysqli_error($conexion);
        return;
    }
    
    // Recorremos el arreglo de resultados
    while($r=mysqli_fetch_array($resultado)){        
        
        echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-2 thumb-mixed_md" href="' . $r['imagen'] . '"data-lightgallery="item">';        
        echo '<img class="thumb-ruby__image" src ="' . $r['imagen'] . '" alt =" ' . $r['nombre'] . '">';
        echo '<div class="thumb-ruby__caption">';
        echo '<p>' . $r['nombre'] . '</p>'; 
        echo ''. $r['descripcion'] . '</p>';
        echo '</div> </a>';
        echo '</div>';        
    }
?>