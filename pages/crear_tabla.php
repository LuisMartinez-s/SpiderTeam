<?php
    
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
        echo '<tr>';
        echo '<td>' . $r['nombre'] . '</td>';
        echo '<td>' . $r['descripcion'] . '</td>';        
        echo "<td><img src= ".  $r['imagen'] ." class='img-fluid' style='width:150px;' alt='logo'></td>";
        echo '<td>';
        echo boton      ($r['id'], $r['nombre'], $r['descripcion'], $r['imagen'],'editar.php', 'Editar');
        echo '<br>';
        echo boton($r['id'], $r['nombre'], $r['descripcion'], $r['imagen'],'borrar.php', 'Borrar');        
        echo '</td>';
        echo '</tr>';      
    }

    // Cerrar sesión
    mysqli_close($conexion);
        
    function boton($id, $nombre, $descripcion, $imagen, $destino, $texto){
        echo '<form method = "post" action = "' . $destino . '">';
        echo '<input type = "hidden" name = "id" value = "' . $id . '">';
        echo '<input type = "hidden" name = "nombre" value = "' . $nombre . '">';
        echo '<input type = "hidden" name = "descripcion" value = "' . $descripcion . '">';
        echo '<input type = "hidden" name = "imagen" value = "' . $imagen . '">';
        echo '<input type = "submit" class="btn btn-primary" value = "' . $texto . '">';
        echo '</form>';
    }
    
?>