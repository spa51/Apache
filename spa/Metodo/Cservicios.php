<?php
include_once("DbManager.php");
$objeto=new DBManager();

class Producto
{
  function buscar_cliente($idcliente,$conexion){
    $sql="SELECT * FROM cliente c WHERE c.idcliente='$idcliente'";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function buscar_venta($idcliente,$conexion){
    $sql="SELECT * FROM ventas v WHERE v.idcliente='$idcliente'";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function consulta_factura($idcliente,$conexion){
    $sql="SELECT f.idfactura, p.idproducto, p.producto, f.unidades, p.precio, f.consecutivo FROM cliente c, factura f, productos p, ventas v WHERE c.idcliente='$idcliente' AND c.idcliente=v.idcliente AND f.idfactura=v.idfactura AND p.idproducto=f.idproducto";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function ultimo_cliente($idcliente,$conexion){
    $sql="SELECT MAX(f.consecutivo) AS ultimo FROM ventas v, cliente c, factura f WHERE v.idcliente='$idcliente' AND v.idcliente=c.idcliente AND f.idfactura=v.idfactura";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }
}

?>
