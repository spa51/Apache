<?php
include_once("DbManager.php");
$objeto=new DBManager();

class Producto{

    function ingresar_datos($cedula,$nombre,$apellido,$tele,$direccion,$correo,$tarjeta,$habi,$fecha_entrada,$fecha_salida,$dias,$conexion)
    {
      $sql="INSERT INTO clientes(cedula,nombre,apellido,telefono,direccion,email,tarjeta) VALUES ('$cedula','$nombre','$apellido','$tele','$direccion','$correo','$tarjeta')";
      $sql1="INSERT INTO reserva(cedula_cli,habi_reser,en_fecha,sa_fecha,dias) VALUES ('$cedula','$habi','$fecha_entrada','$fecha_salida','$dias')";
      $rec=mysqli_query($conexion,$sql);  
      $rec1=mysqli_query($conexion,$sql1);
        
      include_once("reserva.php");
    }
    function ingresar_datos_2($cedula,$nombre,$apellido,$tele,$direccion,$correo,$tarjeta,$habi,$fecha_entrada,$fecha_salida,$dias,$conexion)
    {
      $sql="INSERT INTO clientes(cedula,nombre,apellido,telefono,direccion,email,tarjeta) VALUES ('$cedula','$nombre','$apellido','$tele','$direccion','$correo','$tarjeta')";
      $sql1="INSERT INTO reserva(cedula_cli,habi_reser,en_fecha,sa_fecha,dias) VALUES ('$cedula','$habi','$fecha_entrada','$fecha_salida','$dias')";
      $rec=mysqli_query($conexion,$sql);  
      $rec1=mysqli_query($conexion,$sql1);
        
      include_once("../admin/reserva.php");
    }
    function buscar_cliente($idcliente,$conexion){
      $sql="SELECT cedula,nombre,apellido,telefono FROM clientes WHERE cedula='$idcliente'";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function factura($idcliente,$conexion){
      $sql="SELECT c.cedula, e.id_habi, e.valor, m.cedula_cli, m.habi_reser, m.dias, f.producto, f.precio, f.cedula_cli,f.id_mini FROM clientes c, habitaciones e, reserva m,  minimark f WHERE c.cedula='$idcliente' AND c.cedula=m.cedula_cli AND c.cedula=f.cedula_cli AND m.habi_reser=e.id_habi";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    
    function ingresar_mini($cedula,$nombre,$precio,$conexion)
    {
      $sql="INSERT INTO minimark(cedula_cli,producto,precio) VALUES ('$cedula','$nombre','$precio')";
      $rec=mysqli_query($conexion,$sql);  
        
      include_once("minimark.php");
    }
    function mostrar_clientes($conexion){
      $sql="SELECT * FROM clientes";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function mostrar_reservas($conexion){
      $sql="SELECT * FROM reserva";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    
}
  function factura(){
    $sql="SELECT SUM(productos.precio * stock.cantidad) FROM productos
    INNER JOIN stock
    ON (productos.id_producto = stock.id_producto)
    WHERE stock.cantidad>0";
    $rec=mysqli_query($conexion,$sql);

    include_once("");
  }

?>