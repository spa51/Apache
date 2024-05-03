<?php
$id = $_POST['id'];
$nombre = $_POST['Nombre'];
$precio = $_POST['Precio'];
$detalles = $_POST['Detalles'];
include_once("Cservicios.php");
$conexion = $objeto->connectDB();
$objconsulta = new Producto;
$result2 = $objconsulta->actualizar($id, $nombre, $precio, $detalles, $conexion);
?>