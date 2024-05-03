<?php
class Liquidación{
	function Cesantias($salario,$dias){
    $Cesantias=($salario*$dias)/360;
    return $Cesantias;
  }
	function Interes_Cesantias($Cesantias,$dias){
    $IntCes=($Cesantias*$dias*0.12)/360;
    return $IntCes;
  }
	function Vacaciones($salario,$dias){
    $vacaciones=($salario*$dias)/720;
    return $vacaciones;
  }
	function Prima($salario,$diassem){
    $prima=($salario*$diassem)/360;
    return $prima;
  }
}
?>
