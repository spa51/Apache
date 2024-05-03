<?php

$modelo=$_POST['Modelo'];
$color=$_POST['Color'];
$placa=$_POST['Placa'];
$distancia=$_POST['Distancia'];
$tiempo=$_POST['Tiempo'];

include_once("clase.php");

$suma=new Factura();



$suma->cargar($distancia,$tiempo);
$suma->total();
echo 'Modelo:'; echo $modelo.'<br>';
echo 'Color:'; echo $color.'<br>';
echo 'Placa:'; echo $placa.'<br>';
echo 'Distancia:'; echo $distancia.'<br>';
echo 'Tiempo:'; echo $tiempo.'<br>';
echo 'El Resultado es:';
$suma->imprimirResultado();

?>
