<?php
include_once("Operar.php");
$objconsulta = new Operaciones;
$conexion = $objconsulta->conectar();
$result = $objconsulta->buscar($conexion);
$row = mysqli_fetch_array($result);

if($row[0]=='2021-10-31'){
    $result2 = $objconsulta->Agregar($conexion,$row[0]);
}

?>