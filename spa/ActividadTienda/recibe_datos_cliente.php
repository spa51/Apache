<?php
$id_cliente=$_POST['id_cliente'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];

include_once("Cservicios.php");

$objconsulta=new cGlobal;
$result=$objconsulta->ingresar_cliente($id_cliente,$nombre,$direccion);


?>
