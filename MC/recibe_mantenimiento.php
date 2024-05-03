<?php
$consecutivo=$_POST['consecutivo'];
$idtipo=$_POST['idtipo'];
$idequipo=$_POST['idequipo'];
$fecha=$_POST['fecha'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_mantenimiento($consecutivo,$idtipo,$idequipo,$fecha,$conexion);
?>
