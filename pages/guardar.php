<?php

    include("includes/utilerias.php");

    // Validando información recibida
    $nombre = validar($_POST['nombre']);
    $descripcion = validar($_POST['descripcion']);
    $imagen = $_FILES['imagen'];

    // Verificar que haya información
    if(empty($nombre) || empty($descripcion)){
        redireccionar('Datos no válidos','registrar.php');
        return;
    }
    
    // Conectar a la base de datos
    $conexion = conectar();            

    $url = subir_imagen($imagen);

    // Especificar sentencia sql y ejecutarla
    $sql = "insert into imagenes (nombre, descripcion, imagen) values('$nombre','$descripcion','$url')";
    mysqli_set_charset($conexion,'utf-8');
    $resultado = mysqli_query($conexion, $sql);

    // Verficicar que la sentencia se haya ejecutado correctamente
    if($resultado){
        redireccionar('Imagen guardada', 'registrar.php');    
    }
    else{
        redireccionar('Error: ' . mysqli_error($conexion), 'registrar.php');        
    }
    
    // Cerrar conexión de la base de datos
    mysqli_close($conexion);
?>