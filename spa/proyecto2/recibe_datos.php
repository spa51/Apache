<?php
$id=$_POST['id'];
$producto=$_POST['producto'];
$unidades=$_POST['unidades'];
$precio=$_POST['precio'];


include_once("Cservicios.php");
$conexion = $objeto->connectDB();
$objconsulta=new cProducto;
$result=$objconsulta->registrar_producto($id,$producto,$unidades,$precio,$conexion);
?>