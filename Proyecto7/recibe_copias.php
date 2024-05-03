<?php
$id=$_POST['id'];
$idlibro=$_POST['idlibro'];
$estado=$_POST['estado'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_copia($id,$idautor,$estado,$conexion);
?>
