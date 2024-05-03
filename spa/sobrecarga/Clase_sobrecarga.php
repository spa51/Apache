<?php

/**
 *
 */
class Sobrecargar
{

  function Definitiva($quiz,$taller,$trabajo,$parcial)
  {
    $definitiva=($quiz*0.04+$taller*0.05+$trabajo*0.06+$parcial*0.2)/0.35;

    return $definitiva;
  }

  function Definitiva2($taller,$trabajo,$parcial)
  {
    $definitiva=($taller*0.08+$trabajo*0.07+$parcial*0.2)/0.35;

    return $definitiva;
  }
}


 ?>
