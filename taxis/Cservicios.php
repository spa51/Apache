<?php
include_once("DbManager.php");
$objeto=new DBManager();

class Producto{
    
    ////////////////////////////////////////////////////////////7 Beta
    // "SELECT COUNT(`can`) AS total, can FROM cliv GROUP by `can`"
    function verplacas($placa,$conexion){
      $sql="SELECT * FROM placa_taxi";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function kiloplaca($placa,$conexion){
      $sql="SELECT MAX(final) as kilometraje_final FROM kilometraje
      WHERE placa = '$placa';";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function datostaxi($placa,$conexion){
      $sql="SELECT `fecha`,`inicio`,`final`
      FROM kilometraje
      WHERE placa = '$placa';";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function datostaxifecha($placa,$fecha,$conexion){
      $sql="SELECT `fecha`,`inicio`,`final`
      FROM kilometraje
      WHERE placa = '$placa' AND fecha = '$fecha';";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function datostaxiintervalo($placa,$fecha,$fechaf,$conexion){
      $sql="SELECT `fecha`,`inicio`,`final`
      FROM kilometraje
      WHERE placa = '$placa' AND fecha BETWEEN '$fecha' AND '$fechaf';";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function kiloplaca2($placa,$fecha,$fechaf,$conexion){
      $sql="SELECT SUM(final - inicio) AS km_recorridos
      FROM kilometraje
      WHERE placa = '$placa' AND fecha BETWEEN '$fecha' AND '$fechaf';";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function kiloplaca22($placa,$conexion){
      $sql="SELECT SUM(final - inicio) AS km_recorridos
      FROM kilometraje
      WHERE placa = '$placa';";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }


}

?>