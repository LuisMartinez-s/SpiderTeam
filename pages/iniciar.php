<?php
    include('includes/utilerias.php');

    // Revisar si se llegó desde el formulario
   

    //$usuario = $_POST['nombre-usuario'];
   // $contrasena = $_POST['contrasena'];

  //  if($usuario == 'admin' && $contrasena == '123'){
        redireccionar('Bienvenido administrador','../pages/admin.php');
        $_SESSION["usuario"] = "Admin";                
  //  }
  // else{
    //    redireccionar('Datos incorrectos','../pages/index.php');
    //}
?>