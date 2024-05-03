<?php

class Ventas{


  function Cliente(){
    $clientes=array(
      array("01","juan"),
      array("02","Diego"),
      array("03","Carmen"),

    );
    return $clientes;
  }
  function Venta(){
    $v=array(
      array("1","01","2021-01-10"),
      array("2","02","2021-02-17"),
      array("3","03","2021-01-12"),
      array("4","03","2021-04-01")
    );
    return $v;
  }
  function Valores(){
    $valores=array(
      array("1","001","2"),
      array("1","002","1"),
      array("2","001","4"),
       array("3","003","3")
    );
    return $valores;
  }
  function Productos(){
    $pro=array(
      array("001","calzado","4000"),
      array("002","cuadernos","500"),
      array("004","lapices","200"),
       array("003","libreta","2000")
    );
    return $pro;
  }
}
 ?>
