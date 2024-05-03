<?php

$id_producto=$_POST['id_producto'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$existencias=$_POST['existencias'];
$id_proveedor=$_POST['id_proveedor'];

include_once("Cservicios.php");

$objconsulta=new cGlobal;
$result=$objconsulta->ingresar_producto($id_producto,$nombre,$precio,$existencias,$id_proveedor);


?>
