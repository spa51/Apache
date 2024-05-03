<?php
$id_producto=$_POST['id_producto'];
$num_factura=$_POST['num_factura'];
$cantidad=$_POST['cantidad'];

include_once("Cservicios.php");

$objconsulta=new cGlobal;
$result=$objconsulta->ingresar_categoria($id_producto,$num_factura,$cantidad);


?>
