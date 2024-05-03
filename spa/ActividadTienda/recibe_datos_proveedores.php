<?php
$id_proveedor=$_POST['id_proveedor'];
$nombre_proveedor=$_POST['nombre_proveedor'];

include_once("Cservicios.php");

$objconsulta=new cGlobal;
$result=$objconsulta->ingresar_proveedores($id_proveedor,$nombre_proveedor);


?>
