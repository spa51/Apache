<?php

$codigo=$_POST['codigo'];
$dato1=$_POST['dato1'];
$dato2=$_POST['dato2'];
$dato3=$_POST['dato3'];


include_once("clase_subclases.php");

$suma=new Suma();

$suma->cargar($dato1);
$suma->cargar2($dato2);
$suma->cargar3($dato3);

$suma->operar();
echo 'El Primero valor es:'; echo $dato1.'<br>';
echo 'El Segundo valor es:'; echo $dato2.'<br>';
echo 'El Tercer valor es:'; echo $dato3.'<br>';

echo 'El Resultado de la suma es:';
$suma->imprimirResultado();
 ?>
