<?php
$idcliente=$_POST['idcliente'];
$nombres=$_POST['nombres'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_cliente($idcliente,$nombres,$direccion,$telefono,$conexion);
?>
