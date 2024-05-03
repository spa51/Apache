<?php

$dato1=$_POST['id'];
$dato2=$_POST['precio'];
$dato3=$_POST['venta'];
$dato4=$_POST['existencias'];

include_once("clase.php");

$suma=new Factura();


$suma->cargar($dato1,$dato2,$dato3,$dato4);
$suma->total();
echo 'ID:'; echo $dato1.'<br>';
echo 'Precio:'; echo $dato2.'<br>';
echo 'Cantidad:'; echo $dato3.'<br>';
echo 'Existencias:'; echo $dato4.'<br>';
echo 'El Resultado de la suma es:';
$suma->imprimirResultado();

 ?>
