<?php
class Ventas{
  function Clientes(){
    $Clientes=array(
              array("01",'Jhojan Cárdenas Arroyo'),
              array("02",'Ivan Paez Hernández'),
              array("03",'Raúl Isaza Villadiego')
    );
    return $Clientes;
  }

  function Ventas(){
    $v=array(
            array("1","01","2021-03-10"),
            array("2","01","2021-02-17"),
            array("3","03","2021-01-12"),
            array("4","02","2021-04-01")
    );
    return $v;
  }

  function Valores(){
    $valores=array(
            array("1","001","2"),
            array("1","002","1"),
            array("3","001","4"),
            array("2","003","3"),
            array("4","003","3")
    );
    return $valores;
  }

  function Productos(){
    $pro=array(
            array("001","Calzado","4000"),
            array("002","Cuaderno","500"),
            array("003","Lápices","200"),
            array("004","Libreta","2000")
    );
    return $pro;
  }
}
?>
