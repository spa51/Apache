<?php
$idautor=$_POST['idautor'];
$nombre=$_POST['nombre'];
$nacionalidad=$_POST['nacionalidad'];
$fechaNac=$_POST['fechaNac'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_autor($idautor,$nombre,$nacionalidad,$fechaNac,$conexion);
?>
