<?php
$consecutivo=$_POST['consecutivo'];
$id=$_POST['id'];
$vendidas=$_POST['vendidas'];
$fecha=$_POST['fecha'];



include_once("Cservicios.php");
$conexion = $objeto->connectDB();
$objconsulta=new cProducto;
$result=$objconsulta->registrar_venta($consecutivo,$id,$vendidas,$fecha,$conexion);
?>