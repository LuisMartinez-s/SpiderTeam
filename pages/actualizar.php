<?php

    include ('includes/utilerias.php');

    // Conectar a la base de datos
    $conexion = conectar();

    // Obtener la información del formulario
    $id = $_POST['id'];    
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];        
    $imagen = $_FILES['imagen'];
    $url = subir_imagen($imagen);

    if ($_FILES['imagen']['name'] != null) {
        $sql = "update imagenes set nombre = '$nombre', descripcion = '$descripcion', imagen = '$url'  where id = '$id'";
        $resultado = mysqli_query($conexion, $sql);
        if ($resultado) {
            redireccionar('Imagen Actualizada', 'admin.php');        
        }
        else{
            redireccionar('Error: ' . mysqli_error($conexion), 'admin.php');
        }
        // Cerrar la conexión
    mysqli_close($conexion);
    }
    else{
    // Crear el enunciado SQL    
    $sql = "update imagenes set nombre = '$nombre', descripcion = '$descripcion'  where id = '$id'";

    // Ejecutar la sentencia sQL
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        redireccionar('Imagen Actualizada', 'admin.php');        
    }
    else{
        redireccionar('Error: ' . mysqli_error($conexion), 'admin.php');
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}
?>