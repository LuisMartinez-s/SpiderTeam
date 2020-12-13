<?php
  include('includes/utilerias.php');
  
// Revisar si se llegó desde el formulario    
    if (empty($_POST)) {
        redireccionar('Entrada no válida','index.php');
    }

  $usuario = $_POST['nombre-usuario'];
  $contrasena = $_POST['contrasena'];

  if($usuario == 'admin' && $contrasena == '123'){
      redireccionar('ADMINISTRADOR','index.php');
      session_start();
      $_SESSION["usuario"] = "Administrador";                
  }

  else{
      redireccionar('Datos incorrectos','index.php');
  }
?>