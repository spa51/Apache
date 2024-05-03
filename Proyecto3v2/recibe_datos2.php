<?php
$consecutivo=$_POST['consecutivo'];
$idfactura=$_POST['idfactura'];
$idproducto=$_POST['idproducto'];
$uni_vendidas=$_POST['uni_vendidas'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->Nueva_Venta($consecutivo,$idfactura,$idproducto,$uni_vendidas,$conexion);
?>
