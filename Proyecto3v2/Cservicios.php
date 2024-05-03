<?php
include_once("DbManager.php");
$objeto=new DBManager();

class Producto
{
  function ingresar_prod($nombre,$unidades,$precio,$conexion)
  {
    $sql="insert into tproductos(nombre,unidades,precio) VALUES('$nombre','$unidades','$precio')";
    $rec=mysqli_query($conexion,$sql);

    include_once("registrardatos.php");
  }

  function ingresar_cliente($idcliente,$nombres,$apellidos,$direccion,$email,$celular,$conexion)
  {
    $sql="insert into tclientes(idcliente,nombres,apellidos,direccion,email,celular) VALUES('$idcliente','$nombres','$apellidos','$direccion','$email','$celular')";
    $rec=mysqli_query($conexion,$sql);

    include_once("nuevo_usuario.php");
  }

  function ingresar_usuario($idcliente,$usuario,$password,$conexion)
  {
    $sql="insert into tusuarios (idcliente,usuario,password) VALUES('$idcliente','$usuario','$password')";
    $rec=mysqli_query($conexion,$sql);

    include_once("index.php");
  }

  function actualizar_prod($idproducto,$nombre,$unidades,$precio,$conexion)
  {
    $sql="UPDATE tproductos SET nombre='$nombre',unidades='$unidades',precio='$precio' WHERE idproducto='$idproducto'";
    $rec=mysqli_query($conexion,$sql);

    include_once("ingresar_producto2.php");
  }

  function consultar_prod($idproducto,$conexion){
    $sql="SELECT * FROM tproductos WHERE idproducto='$idproducto'";
    $rec=mysqli_query($conexion,$sql);
    if($rec==""){
      $_SESSION['k_idproducto']=$row['idproducto'];
      echo $_SESSION['k_idproducto'];
    }
    return $rec;
  }

  function consultar_ventas($idproducto,$conexion){
    $sql="SELECT p.idproducto, v.consecutivo, p.nombre, p.unidades, v.uni_vendidas, f.fecha FROM tproductos p, ventas v, factura f WHERE p.idproducto='$idproducto' AND p.idproducto=v.idproducto AND v.idfactura=f.idfactura";
    $rec=mysqli_query($conexion,$sql);
    if($rec==""){
      $_SESSION['k_id']=$row['id'];
      echo $_SESSION['k_id'];
    }
    return $rec;
  }

  function consultar_fact($id,$conexion){
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

  function Nueva_Venta($consecutivo,$idfactura,$idproducto,$uni_vendidas,$conexion)
  {
    $sql="insert into ventas(consecutivo,idfactura,idproducto,uni_vendidas) VALUES('$consecutivo','$idfactura','$idproducto','$uni_vendidas')";
    $rec=mysqli_query($conexion,$sql);

    include_once("nueva_venta.php");
  }

  function mostrar_ventas($conexion){
    $sql="SELECT v.*, f.fecha FROM ventas v, factura f WHERE v.idfactura=f.idfactura ORDER BY f.fecha";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function mostrarXfecha($fecha1,$fecha2,$conexion){
    $sql="SELECT v.idproducto, v.uni_vendidas, f.fecha FROM factura f, ventas v WHERE f.fecha>='$fecha1' and f.fecha<='$fecha2' and f.idfactura=v.idfactura ORDER BY f.fecha";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function consulta_factura($idcliente,$conexion){
    $sql="SELECT c.idcliente, c.nombres, c.celular, f.idfactura, f.fecha, v.consecutivo, v.idproducto, v.uni_vendidas, p.nombre FROM ventas v, tclientes c, factura f, tproductos p WHERE f.idcliente='$idcliente' and f.idcliente=c.idcliente and v.idfactura=f.idfactura and v.idproducto=p.idproducto ORDER BY v.idfactura";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function idcliente_max($conexion){
    $sql="SELECT MAX(idcliente)+1 AS idmax FROM tclientes";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }

  function ultimo_idcliente($conexion){
    $sql="SELECT MAX(idcliente) AS ultimo FROM tclientes";
    $rec=mysqli_query($conexion,$sql);
    return $rec;
  }
}

?>
