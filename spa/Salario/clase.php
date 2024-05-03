<?php

/**
 *
 */
class Principal
{

  function Comision($B,$C,$D)
  {
    $comi=(($B+$C+$D)*0.15);

    return $comi;
  }
  function total($A,$B,$C,$D){
    $comi=(($B+$C+$D)*0.15);
    $sal= ($A+$comi);

    return $sal;
  }

  function Promedio($B,$C,$D){
    $pro=($B+$C+$D)/3;
    return $pro;
  }
}


 ?>
