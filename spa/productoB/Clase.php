<?php

/**
 *
 */
class Banco
{

  function Clientes()
  {
    $clientes = array(
        array("0001", "Jugo",1500,18,50,5 ),
        array("0002", "Huevos",500,50,80,5 ),
        array("0003", "Avena",1500,40,75,6 ),
        array("0004", "Cafe",3000,45,50,8 )
    );
    return $clientes;
  }
  function Movi(){
    $movimi=array(
        array("01",10,1),
        array("01",5,2),
        array("02",20,1),
        array("03",10,1),
        array("03",6,2)
    );
    return $movimi;
  }
}


 ?>
