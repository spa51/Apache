<?php
include_once("DbManager.php");
$objeto=new DBManager();

class Producto{

    function ingresar_voto($cedula,$candidato,$conexion)
    {
      $sql="insert into cliv(cedula,can) VALUES('$cedula','$candidato')";
      $rec=mysqli_query($conexion,$sql);
        
      include_once("index.php");
    }
    
    ////////////////////////////////////////////////////////////7 Beta
    // "SELECT COUNT(`can`) AS total, can FROM cliv GROUP by `can`"
    function cantidad_one($cedula,$conexion){
      $sql="SELECT COUNT(`cedula`) AS total FROM cliv WHERE can=1";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function cantidad_two($cedula,$conexion){
      $sql="SELECT COUNT(`cedula`) AS total FROM cliv WHERE can=2";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function cantidad_three($cedula,$conexion){
      $sql="SELECT COUNT(`cedula`) AS total FROM cliv WHERE can=3";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function cantidad_four($cedula,$conexion){
      $sql="SELECT COUNT(`cedula`)  AS total FROM cliv WHERE can=4";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function cantidad_five($cedula,$conexion){
      $sql="SELECT COUNT(`cedula`) AS total FROM cliv WHERE can=5";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function cantidad_six($cedula,$conexion){
      $sql="SELECT COUNT(`cedula`) AS total FROM cliv WHERE can=6";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
/////////////////////////////////////////////////////////////////////////////////
    function ganador($idlector,$conexion){
      $sql="SELECT `can`, count(`can`) total
      FROM
      cliv
      group by
      `can` having count(`can`) =
      (SELECT
      max(i.maximo) from
      (select count(`can`) AS maximo
      from cliv
      group by `can`) i)";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }



}

?>