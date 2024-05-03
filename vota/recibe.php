<?php
$cedula=$_POST['cedula'];
$candidato=$_POST['candidato'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_voto($cedula,$candidato,$conexion);
?>