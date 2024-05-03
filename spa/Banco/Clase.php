<?php

/**
 *
 */
class Banco
{

  function Clientes()
  {
    $clientes = array(
        array("0001", "Juan", 1000, ),
        array("0002", "Pedro", 2000, ),
        array("0003", "Maria", 3000, ),
        array("0004", "Mariass", 3000, )
    );
    return $clientes;
  }
  function Movi(){
    $movimi=array(
        array("01",10,1),
        array("02",20,1),
        array("03",30,1),
        array("03",100,2)
    );
    return $movimi;
  }
}


 ?>
