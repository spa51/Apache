<?php
class Casa
{

  function Matriz()
  {
    $idmatriz = array(
      array(01,"Camilo",3030303030),
      array(02,"Juan",3131313131),
      array(03,"Fernando",3232323232)

    );
    return $idmatriz;
  }
  function NoMatriz(){
    $nomatriz = array(
      array(101,01,"21/04/21"),
      array(202,02,"23/04/21"),
      array(303,03,"26/04/21"),
      array(304,01,"26/04/21")

    );
    return $nomatriz;
  }

  function VaMatriz(){

        $vamatriz = array(
          array(01,101,10000),
          array(02,202,20000),
          array(03,303,30000),
          array(04,304,50000),
          array(04,304,80000)

        );
        return $vamatriz;
  }

}

 ?>
