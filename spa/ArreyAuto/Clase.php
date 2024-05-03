<?php

/**
 *
 */
class Depreciacion
{

  function Matriz()
  {

    $matriz = array(
      array(70000000,5),
      array(10000000,3)


    );
    return $matriz;
  }
  function sumadigitos($nan){
    $suma=0;
    for($i=1;$i<=$nan;$i++){
      $suma=$suma+$i;
    }
    return $suma;
  }


}


 ?>
