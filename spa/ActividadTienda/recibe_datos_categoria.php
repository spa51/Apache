<?php
$id_cliente=$_POST['id_cliente'];
$num_factura=$_POST['num_factura'];
$fecha=$_POST['fecha'];

include_once("Cservicios.php");

$objconsulta=new cGlobal;
$result=$objconsulta->ingresar_facturas($id_cliente,$num_factura,$fecha);


?>
