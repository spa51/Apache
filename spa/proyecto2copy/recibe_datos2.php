<?php
$consecutivo=$_POST['consecutivo'];
$id=$_POST['id'];
$uni_vendidas=$_POST['uni_vendidas'];
$fecha=$_POST['fecha'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->Nueva_Venta($consecutivo,$id,$uni_vendidas,$fecha,$conexion);
?>
