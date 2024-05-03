<?php

class Busqueda{


  function Libro(){
    $libro=array(
      array("01","Los viajes de Gulliver","2008"),
      array("02","El Robinson suizo","1812"),
      array("03","La ciencia de la ciencia ficcion","2019"),
      array("04","Maldad liquida","2019")

    );
    return $libro;
  }
  function Autor(){
    $autor=array(
      array("01","Jonathan Swift"),
      array("02","Johann David Wyss"),
      array("03","Manuel Moreno Luiañez"),
      array("04","Jordi Jose Pont"),
      array("05","Zygmunt Bauman"),
      array("06","Leonidas Donskis")
    );
    return $autor;
  }
  function LibroAutor(){
    $lv=array(
      array("01","01"),
      array("02","02"),
      array("03","03"),
      array("03","04"),
      array("04","05"),
      array("04","06")
    );
    return $lv;
  }
  }
 ?>
