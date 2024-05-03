<?php
$nombre=$_POST['Nombre'];
$precio=$_POST['Precio'];
$detalles=$_POST['Detalles'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta-> ingresarpro($nombre, $detalles, $precio,$conexion);
?>