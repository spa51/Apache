<?php
$idlector=$_POST['id_lector'];
$idlibro=$_POST['id_libro'];
$fecha=$_POST['fecha_devolucion'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_devolucion($idlector,$idlibro,$fecha,$conexion);
$result=$objconsulta->ingresar_devolucion1($idlector,$idlibro,$fecha,$conexion);
$result=$objconsulta->ingresar_devolucion2($idlector,$idlibro,$fecha,$conexion);
?>
