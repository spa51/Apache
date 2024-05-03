<?php
class Depreciacion{
  function sumadigitos($anios){
    $suma=0;
    for($i=1;$i<=$anios;$i++){
      $suma=$suma+$i;
    }
    return $suma;
  }

  function Inmueble(){
    $inmueble=array(
              array(10000000,10)
    );
    return $inmueble;
  }
}
?>
