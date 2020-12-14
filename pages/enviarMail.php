<?php
$destino="luarmartinezsa@ittepic.com.mx";
$date=$_POST["fecha"];
$areaInteres=$_POST["areaInteres"];
$nombreEscuela=$_POST["nombreEscuela"];
$nombreEncargado=$_POST["nombreEncargado"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];
$totalAlum=$_POST["totalAlum"];
$comentarios=$_POST["comentarios"];
//contenido del mensaje
$contenido="Fecha: " . $date . "\nArea de interés: " . $areaInteres .
 "\nNombre de la escuela: " . $nombreEscuela . "\nEncargado: " . $nombreEncargado . "\nTeléfono: " . $telefono
. "\nCorreo: " .$email . "\nTotal de alumnos: " . $totalAlum . "\nComentarios: " .$comentarios;

mail($destino,"Solicitud de visita",$contenido);
?>