<?php
$idproducto=$_POST['idproducto'];
$nombre=$_POST['nombre'];
$unidades=$_POST['unidades'];
$precio=$_POST['precio'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->actualizar_prod($idproducto,$nombre,$unidades,$precio,$conexion);
?>
