<?php
$nombre=$_POST['producto'];
$precio=$_POST['precio'];
$cedula=$_POST['cedula'];       


include_once("../Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_mini($cedula,$nombre,$precio,$conexion);
?>