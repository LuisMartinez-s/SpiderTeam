<?php
    include('includes/utilerias.php');

    $id = $_POST['id'];
    
    // Conectar a la base de datos
    $conexion = conectar();

    // Crear el enunciado SQL
    $sql = "delete from imagenes where id ='$id'";

    //Ejecutar la sentencia SQL
    $resultado = mysqli_query($conexion, $sql);

    // Revisar si salió bien la sentencia
    if($resultado){
        redireccionar('Imagen borrada.', 'admin.php');        
    }
    else{
        redireccionar('Error: ' . mysqli_error($conexion), 'admin.php');
    }

    // Cerramos la conexión
    mysqli_close($conexion);
?>