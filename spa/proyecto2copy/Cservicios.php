<?php
include_once("DbManager.php");
$objeto=new DBManager();

class Producto
{
  function ingresar_prod($id,$nombre,$unidades,$precio,$conexion)
  {
    $sql="insert into tproductos(id,nombre,unidades,precio) VALUES('$id','$nombre','$unidades','$precio')";
    $rec=mysqli_query($conexion,$sql);

    include_once("registrardatos.php");
  }

  function actualizar_prod($id,$nombre,$unidades,$precio,$conexion)
  {
    $sql="UPDATE tproductos SET nombre='$nombre',unidades='$unidades',precio='$precio' WHERE id='$id'";
    $rec=mysqli_query($conexion,$sql);

    include_once("ingresar_producto2.php");
  }

  function consultar_prod($id,$conexion){
    $sql="SELECT * FROM tproductos WHERE id='$id'";
    $rec=mysqli_query($conexion,$sql);
    if($rec==""){
      $_SESSION['k_id']=$row['id'];
      echo $_SESSION['k_id'];
    }
    return $rec;
  }

  function consultar_ventas($id,$conexion){
    $sql="SELECT p.id, v.consecutivo, p.nombre, p.unidades, v.uni_vendidas, v.fecha FROM tproductos p, ventas v WHERE p.id='$id' AND p.id=v.id";
    $rec=mysqli_query($conexion,$sql);
    if($rec==""){
      $_SESSION['k_id']=$row['id'];
      echo $_SESSION['k_id'];
    }
    return $rec;
  }

  function mostrar_prod($conexion){
    $sql="SELECT * FROM tproductos";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function Nueva_Venta($consecutivo,$id,$uni_vendidas,$fecha,$conexion)
  {
    $sql="insert into ventas(consecutivo,id,uni_vendidas,fecha) VALUES('$consecutivo','$id','$uni_vendidas','$fecha')";
    $rec=mysqli_query($conexion,$sql);

    include_once("nueva_venta.php");
  }

  function mostrar_ventas($conexion){
    $sql="SELECT * FROM ventas";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }
}

?>
