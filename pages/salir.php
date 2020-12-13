<?php
    include("includes/utilerias.php");
    
    session_start();
    if(isset($_SESSION["usuario"])){
        $_SESSION = array();
        session_destroy();
        redireccionar("Cerrando sesión","index.php");

    } 
    else{
        redireccionar("Prohibido","index.php");
    }
?>