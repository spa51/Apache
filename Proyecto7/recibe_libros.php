<?php
$idlibro=$_POST['idlibro'];
$idautor=$_POST['idautor'];
$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$editorial=$_POST['editorial'];
$año=$_POST['año'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_libro($idlibro,$idautor,$nombre,$tipo,$editorial,$año,$conexion);
?>
