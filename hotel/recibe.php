<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];       
$tele=$_POST['telefono'];
$correo=$_POST['email'];
$direccion=$_POST['direccion'];
$tarjeta=$_POST['tarjeta'];
$habi=$_POST['habitacion'];
$fecha_entrada=$_POST['en_fecha'];
$fecha_salida=$_POST['sa_fecha'];
// $diff = $fecha_entrada->diff($fecha_salida);
$datetime1 = date_create($fecha_entrada);
$datetime2 = date_create($fecha_salida);
$contador = date_diff($datetime1, $datetime2);
$differenceFormat = '%a';
$dias = $contador->format($differenceFormat);

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_datos($cedula,$nombre,$apellido,$tele,$direccion,$correo,$tarjeta,$habi,$fecha_entrada,$fecha_salida,$dias,$conexion);
?>