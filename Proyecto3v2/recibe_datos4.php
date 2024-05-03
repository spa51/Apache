<?php
$idcliente=$_POST['idcliente'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$email=$_POST['email'];
$celular=$_POST['celular'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_cliente($idcliente,$nombres,$apellidos,$direccion,$email,$celular,$conexion);
?>
