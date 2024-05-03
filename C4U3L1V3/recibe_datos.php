<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$comentario=$_POST['comentario'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_datos($nombre,$email,$telefono,$comentario,$conexion);
?>
