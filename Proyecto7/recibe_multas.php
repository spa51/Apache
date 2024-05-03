<?php
$idlector=$_POST['idlector'];
$fechaInicio=$_POST['fechaInicio'];
$fechaFin=$_POST['fechaFin'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_multa($idlector,$fechaInicio,$fechaFin,$conexion);
?>
