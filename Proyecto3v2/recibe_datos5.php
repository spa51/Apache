<?php
$idcliente=$_POST['idcliente'];
$tusuario=$_POST['tusuario'];
$tpassword=$_POST['tpassword'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_usuario($idcliente,$tusuario,$tpassword,$conexion);
?>
