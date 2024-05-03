<?php
include_once("DbManager.php");
$objeto=new DBManager();

class Producto
{
  function ingresar_autor($idautor,$nombre,$nacionalidad,$fechaNac,$conexion)
  {
    $sql="insert into autor(idautor,nombre,nacionalidad,fechaNac) VALUES('$idautor','$nombre','$nacionalidad','$fechaNac')";
    $rec=mysqli_query($conexion,$sql);

    include_once("nuevo_autor1.php");
  }

  function ingresar_libro($idlibro,$idautor,$nombre,$tipo,$editorial,$año,$conexion)
  {
    $sql="insert into libro(idlibro,idautor,nombre,tipo,editorial,año) VALUES('$idlibro','$idautor','$nombre','$tipo','$editorial','$año')";
    $rec=mysqli_query($conexion,$sql);

    include_once("nuevo_libro1.php");
  }

  function ingresar_lector($idlector,$nombre,$conexion)
  {
    $sql="insert into lector(idlector,nombre) VALUES('$idlector','$nombre')";
    $rec=mysqli_query($conexion,$sql);

    include_once("nuevo_lector1.php");
  }

  function ingresar_copia($id,$idautor,$estado,$conexion)
  {
    $sql="insert into copia(id,idautor,estado) VALUES('$id','$idautor','$estado')";
    $rec=mysqli_query($conexion,$sql);

    include_once("nuevo_copia1.php");
  }

  function ingresar_multa($idlector,$fechaInicio,$fechaFin,$conexion)
  {
    $sql="insert into multa(idlector,fechaInicio,fechaFin) VALUES('$idlector','$fechaInicio','$fechaFin')";
    $rec=mysqli_query($conexion,$sql);

    include_once("nuevo_devolucion1.php");
  }

  function ingresar_prestamo($consecutivo,$idlibro,$idlector,$fechaPrestamo,$fechaMaxDev,$conexion)
  {
    $sql="insert into prestamo(consecutivo,idlibro,idlector,fechaPrestamo,fechaMaxDev,devolucion) VALUES('$consecutivo','$idlibro','$idlector','$fechaPrestamo','$fechaMaxDev','0')";
    $rec=mysqli_query($conexion,$sql);

    include_once("nuevo_prestamo1.php");
  }

  function ingresar_devolucion($consecutivo,$idlibro,$idlector,$fechaDev,$conexion)
  {
    $sql="UPDATE prestamo SET devolucion='1',fechaDev='$fechaDev' WHERE consecutivo='$consecutivo' AND idlibro='$idlibro' AND idlector='$idlector'";
    $rec=mysqli_query($conexion,$sql);

    include_once("nuevo_devolucion1.php");
  }

  function idautor_max($conexion){
    $sql="SELECT MAX(idautor)+1 AS idmax FROM autor";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function idlibro_max($conexion){
    $sql="SELECT MAX(idlibro)+1 AS idmax FROM libro";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function consecutivo_max($conexion){
    $sql="SELECT MAX(consecutivo)+1 AS max FROM prestamo";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function idlector_max($conexion){
    $sql="SELECT MAX(idlector)+1 AS max FROM lector";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function id_max($conexion){
    $sql="SELECT MAX(id)+1 AS idmax FROM copia";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function mostrar_autores($conexion){
    $sql="SELECT idautor, nombre FROM autor ORDER BY nombre ASC";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function mostrar_lectores($conexion){
    $sql="SELECT idlector, nombre FROM lector ORDER BY nombre ASC";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function mostrar_libros($conexion){
    $sql="SELECT idlibro, nombre FROM libro ORDER BY nombre ASC";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function calcular_multa($consecutivo,$idlector,$idlibro,$conexion){
    $sql="SELECT TIMESTAMPDIFF(day, p.fechaMaxDev, p.fechaDev) as dias FROM prestamo p WHERE p.consecutivo=$consecutivo AND p.idlector=$idlector AND p.idlibro=$idlibro";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function cantidad_libros($idlector,$conexion){
    $sql="SELECT COUNT(p.idlector) as libros FROM lector l, prestamo p WHERE l.idlector=p.idlector AND p.devolucion=0 AND p.idlector='$idlector'";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }
}

?>
