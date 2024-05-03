<?php
include_once("DbManager.php");
$objeto=new DBManager();

class Producto{

    function ingresar_prestamo($idlector,$idlibro,$fecha,$conexion)
    {
      $sql="insert into prestamo(id_lector,id_libro,fecha_prestamo) VALUES('$idlector','$idlibro','$fecha')";
      $rec=mysqli_query($conexion,$sql);
        
      include_once("prestamos.php");
    }
    function ingresar_prestamo1($idlector,$idlibro,$fecha,$conexion)
    {
      $sql="update lector SET prestamos=(prestamos)+1 WHERE lector.id_lector ='$idlector'";
      $rec=mysqli_query($conexion,$sql);
        
      include_once("prestamos.php");
    }
    function ingresar_prestamo2($idlector,$idlibro,$fecha,$conexion)
    {
      $sql="update libros SET estado='Prestado' WHERE id_libro ='$idlibro'";
      $rec=mysqli_query($conexion,$sql);
        
      include_once("prestamos.php");
    }

    function ingresar_devolucion($idlector,$idlibro,$fecha,$conexion)
    {
      $sql="update prestamo set fecha_devolucion ='$fecha', marca=1 where id_lector='$idlector' and id_libro='$idlibro'";
      $rec=mysqli_query($conexion,$sql);
  
      include_once("devoluciones.php");
    }
    function ingresar_devolucion1($idlector,$idlibro,$fecha,$conexion)
    {
      $sql="update lector SET prestamos=(prestamos)-1 WHERE lector.id_lector ='$idlector'";
      $rec=mysqli_query($conexion,$sql);
  
      include_once("devoluciones.php");
    }
    function ingresar_devolucion2($idlector,$idlibro,$fecha,$conexion)
    {
      $sql="update libros SET estado='Biblioteca' WHERE id_libro ='$idlibro'";
      $rec=mysqli_query($conexion,$sql);
  
      include_once("devoluciones.php");
    }
    ////////////////////////////////////////////////////////////7 Beta
    function cantidad_librosss($idlector,$conexion){
      $sql="SELECT COUNT(id_lector) as libros FROM prestamo WHERE id_lector=idlector and marca=0";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
/////////////////////////////////////////////////////////////////////////////////
    function cantidad_libros($idlector,$conexion){
      $sql="SELECT prestamos as libros FROM lector WHERE id_lector=$idlector";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }

    function mostrar_libros($conexion){
      $sql="SELECT * FROM libros l, autor a WHERE l.id_libro=a.id_libro";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }

    function mostrar_lectores($conexion){
      $sql="SELECT * FROM lector";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function mostrar_prestamos($conexion){
      $sql="SELECT * FROM prestamo WHERE marca=0";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function mostrar_devoluciones($conexion){
      $sql="SELECT * FROM prestamo WHERE marca=1";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }

    function multa($idlector,$idlibro,$fecha,$conexion)
    {
      $sql="update lector SET multa=1 WHERE id_lector ='$idlector' and fecha_prestamo >= $fecha";
      $rec=mysqli_query($conexion,$sql);
        
      include_once("prestamos.php");
    }


}

?>