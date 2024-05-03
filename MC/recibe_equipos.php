<?php
$idcliente=$_POST['idcliente'];
$idequipo=$_POST['idequipo'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_equipo($idcliente,$idequipo,$conexion);
?>
