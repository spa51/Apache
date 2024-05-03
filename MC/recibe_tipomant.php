<?php
$idtipo=$_POST['idtipo'];
$descripcion=$_POST['descripcion'];
$costo=$_POST['costo'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_tipomant($idtipo,$descripcion,$costo,$conexion);
?>
