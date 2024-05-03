<?php
$idlector=$_POST['idlector'];
$nombre=$_POST['nombre'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_lector($idlector,$nombre,$conexion);
?>
