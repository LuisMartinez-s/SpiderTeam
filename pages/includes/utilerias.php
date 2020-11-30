<?php   
     function redireccionar($mensaje, $url){
        include('includes/encabezado-redireccion.php');
        echo '<br><br><h1 style = "text-align: center; color: lightblue; height: 30vh; margin-top:5em"><b>' . $mensaje . '</b></h1>' . '<h3 style = "text-align: center; color: red; height: 47vh">Redireccionando...</h1>';
        include('includes/pie-redireccion.php');
        header("refresh:2;url=$url");
    }
    function conectar(){
        DEFINE ("SERVIDOR","localhost");
        DEFINE ("USUARIO","root");
        DEFINE ("CONTRASENA","");
        DEFINE ("BD","aspirantestec");

        $resultado = mysqli_connect(SERVIDOR, USUARIO, CONTRASENA, BD);

        if($resultado){
            return $resultado;
        }
        else{
            echo "Error: ". mysqli_connect_error();
            return null;
        }
    }

    function validar($dato){
        $dato = trim($dato);
        $dato = htmlspecialchars($dato);
        $dato = stripslashes($dato);
        return $dato;
    }
    
    function subir_imagen($imagen){

        if(empty($imagen)){
            return null;
        }

        $nombre = $imagen['name'];
        $origen = $imagen['tmp_name'];
        $tama = $imagen['size'];
        $error = $imagen['error'];
        $tip = $imagen['type'];

        // Separar el nombre y la extensión
        $nombre_y_extension = explode('.',$nombre);
        $extension = strtolower(end($nombre_y_extension));

        // Comprobar que la extensión es válida
        $extensiones = array('jpg','jpeg','png','gif');

        if (!in_array($extension,$extensiones)){
            return null;
        }

        // Revisar si hay un error
        if($error > 0){
            return null;
        }

        // Revisar el tamaño menor que 1MB
        if($tama > 1000000){
            return null;
        }

        $nombreNuevo = uniqid('', true);
        $nombreNuevo = $nombreNuevo . '.' . $extension;

        // Dirección donde voy a guardar la imagen
        $destino = "../img/" . $nombreNuevo;
        move_uploaded_file($origen, $destino);

        return $destino;
    }    
?>