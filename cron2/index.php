<?php
include_once("Operar.php");
$objconsulta = new Operaciones;
$conexion = $objconsulta->conectar();
$num1=rand(1,10);
$num2=rand(1,10);
$dife=$num1-$num2;

if($num1>=4 && $num2>=4){
    $result=$objconsulta->Agregar($conexion,$num1,$num2,$dife);
    echo "Se cumplio numero: $num1 y $num2 \nDiferencia: $dife";
}
else{
    echo "No se cumplio numero: $num1 y $num2 \n Diferencia: $dife";
}

?>