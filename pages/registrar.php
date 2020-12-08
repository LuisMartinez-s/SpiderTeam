<?php
    include('includes/encabezado.php');
    include('includes/utilerias.php');
?>
   <!--Div que engloba el área para registrar una nueva imágen.-->
   <link rel="stylesheet" href="../css/style.css" />  
   <div class="contenedor-admin">       
          
        <div class="datos" id="modificable">
            <form action="guardar.php" id="info" method="post" enctype="multipart/form-data">
                <label class = "etiqueta">Título de la imagen:</label>
                <input type="text" id="nombre" class="text-input" name="nombre" placeholder="Nombre..." requiere>
                
                <label class = "etiqueta">Descripción de la imagen:</label>
                <input type="text" id="descripcion" class="text-input" name="descripcion" placeholder="Descripción..." requiere>
                
                <label class = "etiqueta">Cargar una imagen:</label>
                <input type="file" id="imagenfile" name="imagen" class="etiqueta" accept = ".jpg, .gif, .png">
                
                <div class="botones">
                    <input type="submit" value="Guardar Imagen" id = "boton">
                    <input type="reset" value="Borrar Datos" id = "boton">
                </div>
            </form>
        </div>      
    </div> <!-- Termina el div del admin -->
    <?php
    include('includes/pie.php');
    ?>