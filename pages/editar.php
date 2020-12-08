<?php    
    include("includes/utilerias.php");
    include('includes/encabezado.php');
?>
    <!--Div que englobe todo -->
    <link rel="stylesheet" href="../css/registrar.css" /> 
    <div class="contenedor-admin">                
        <div class="datos" id="modificable">
        <form action="actualizar.php" class="formulario" method="post" enctype="multipart/form-data">
            <input type = "hidden" value = "<?php echo $_POST['id']; ?>" name = "id">
            <label class = "etiqueta" for="nombre">Título de la imagen:</label>
            <input type="text" value = "<?php echo $_POST['nombre']; ?>" id="nombre" class="text-input" name="nombre" require>
            <label class = "etiqueta" for="descripcion">Descripcion:</label>
            <input type="text" value = "<?php echo $_POST['descripcion']; ?>" id="descripcion" class="text-input" name="descripcion" require>
            <label class = "etiqueta" for="descripcion">Imagen:</label>
            <input type="file" id="imagenfile" name="imagen" class="etiqueta" accept = ".jpg, .gif, .png">
            <div class="botones">
                <input type="submit" value="Actualizar Imagen" id = "boton">
                <input type="reset" value="Borrar Datos" id = "boton">
            </div>
        </form>
        </div>        
    </div> <!-- Termina el div del admin -->
    
<?php
    include('includes/pie.php');
?>