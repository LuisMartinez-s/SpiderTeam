<?php    
    include("includes/utilerias.php");
    include('includes/encabezado.php');
?>
    <!--Div que englobe todo -->
    <div class="contenedor-admin-tabla">        
        <link rel = "stylesheet" href = "../css/tabla.css">    
        <table class = 'table'>
        <thead class="thead-dark">
            <th>Título de la imagen</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Acciones</th>
            <?php
                include('crear_tabla.php');
            ?>
        </table>
    </div>   
<?php
    include('includes/pie.php');
?>