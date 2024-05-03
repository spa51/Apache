<?php
include_once("DbManager.php");
$objeto=new DBManager();

class Producto
{
  function ingresar_cliente($idcliente,$nombres,$direccion,$telefono,$conexion)
  {
    $sql="insert into cliente(idcliente,nombres,direccion,telefono) VALUES('$idcliente','$nombres','$direccion','$telefono')";
    $rec=mysqli_query($conexion,$sql);

    include_once("nuevo_cliente1.php");
  }

  function ingresar_equipo($idcliente,$idequipo,$conexion)
  {
    $sql="insert into equipo(idcliente,idequipo) VALUES('$idcliente','$idequipo')";
    $rec=mysqli_query($conexion,$sql);

    include_once("nuevo_equipo.php");
  }

  function ingresar_mantenimiento($consecutivo,$idtipo,$idequipo,$fecha,$conexion)
  {
    $sql="insert into mantenimiento(consecutivo,idtipo,idequipo,fecha) VALUES('$consecutivo','$idtipo','$idequipo','$fecha')";
    $rec=mysqli_query($conexion,$sql);

    include_once("nuevo_mantenimiento1.php");
  }

  function ingresar_tipomant($idtipo,$descripcion,$costo,$conexion)
  {
    $sql="insert into tipos(idtipo,descripcion,costo) VALUES('$idtipo','$descripcion','$costo')";
    $rec=mysqli_query($conexion,$sql);

    include_once("nuevo_tipomant1.php");
  }

  function consultar_cliente($idcliente,$conexion){
    $sql="SELECT c.idcliente, c.nombres, m.idequipo, m.idtipo, t.descripcion FROM cliente c, equipo e, mantenimiento m, tipos t WHERE c.idcliente='$idcliente' AND c.idcliente=e.idcliente AND e.idequipo=m.idequipo AND m.idtipo=t.idtipo";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function consultar_equipo($idequipo,$conexion){
    $sql="SELECT m.idtipo, t.descripcion, t.costo, m.fecha FROM mantenimiento m, tipos t WHERE m.idequipo='$idequipo' AND m.idtipo=t.idtipo";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function consultar_pagos($idcliente,$conexion){
    $sql="SELECT c.idcliente, c.nombres, m.idequipo, t.descripcion, t.costo FROM cliente c, equipo e, mantenimiento m, tipos t WHERE c.idcliente='$idcliente' AND c.idcliente=e.idcliente AND e.idequipo=m.idequipo AND m.idtipo=t.idtipo";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function buscar_cliente($idcliente,$conexion){
    $sql="SELECT idcliente, nombres FROM cliente WHERE idcliente='$idcliente'";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function idcliente_max($conexion){
    $sql="SELECT MAX(idcliente)+1 AS idmax FROM cliente";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function consecutivo_max($conexion){
    $sql="SELECT MAX(consecutivo)+1 AS max FROM mantenimiento";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function idtipo_max($conexion){
    $sql="SELECT MAX(idtipo)+1 AS idmax FROM tipos";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }
}

?>
