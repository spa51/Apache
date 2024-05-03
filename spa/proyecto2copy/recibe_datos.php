<?php
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$unidades=$_POST['unidades'];
$precio=$_POST['precio'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_prod($id,$nombre,$unidades,$precio,$conexion);
?>
