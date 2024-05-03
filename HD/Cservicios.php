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
    ////////////////// Nuevo
    function datosproductos($conexion){
      $sql="SELECT `Nombre`,`Detalles`,`Precio`
      FROM productos;";
      $rec=mysqli_query($conexion,$sql);
      return $rec;
    }
    function ingresarpro($nombre, $detalles, $precio, $conexion){
      $sql="INSERT INTO `productos` (`Nombre`,`Detalles`,`Precio`)
      VALUES ('$nombre', '$detalles', '$precio');";
      $rec=mysqli_query($conexion,$sql);
      include_once("anadir_producto.php");
    }

    function buscar($id,$conexion){
      $sql="SELECT `id_producto`,`Nombre`,`Detalles`,`Precio`
      FROM productos
      WHERE id_producto = '$id';";
      $rec=mysqli_query($conexion,$sql);
      return $rec;

    }
    function eliminar($id,$conexion){
      $sql="DELETE FROM `productos` WHERE `productos`.`id_producto` = '$id';";
      $rec=mysqli_query($conexion,$sql);  
      return $rec;
    }
    function actualizar($id, $nombre, $precio, $detalles,$conexion){
      $sql="UPDATE `productos` SET `Nombre` = '$nombre', `Precio` = '$precio', `Detalles` = '$detalles' WHERE `id_producto` = '$id';";
      $rec=mysqli_query($conexion,$sql);  
      include_once("actualizar_producto.php");
    }
    function ordenes($id,$conexion){
      $sql="SELECT
      f.`id_factura`,
      f.`fecha`,
      SUM(p.`Precio` * df.`cantidad`) AS total
FROM
      `facturacion` f
      INNER JOIN `detallesfactura` df ON f.`id_factura` = df.`factura`
      INNER JOIN `productos` p ON df.`producto` = p.`id_producto`
GROUP BY
      f.`id_factura`, f.`fecha`
ORDER BY
      f.`fecha` DESC";
      $rec=mysqli_query($conexion,$sql);
      return $rec;

    }

    function semana($id,$conexion){
      $sql="SELECT
      WEEK(f.`fecha`) AS semana,
      COUNT(DISTINCT f.`id_factura`) AS cantidad_ventas,
      SUM(p.`Precio` * df.`cantidad`) AS valor_total
  FROM
      `facturacion` f
      INNER JOIN `detallesfactura` df ON f.`id_factura` = df.`factura`
      INNER JOIN `productos` p ON df.`producto` = p.`id_producto`
  GROUP BY
      WEEK(f.`fecha`);";
      $rec=mysqli_query($conexion,$sql);
      return $rec;

    }
    function messss($id,$conexion){
      $sql="SELECT
      YEAR(f.`fecha`) AS anio,
      MONTH(f.`fecha`) AS mes,
      COUNT(DISTINCT f.`id_factura`) AS cantidad_ventas,
      SUM(p.`Precio` * df.`cantidad`) AS valor_total
  FROM
      `facturacion` f
      INNER JOIN `detallesfactura` df ON f.`id_factura` = df.`factura`
      INNER JOIN `productos` p ON df.`producto` = p.`id_producto`
  GROUP BY
      YEAR(f.`fecha`),
      MONTH(f.`fecha`)
  ";
      $rec=mysqli_query($conexion,$sql);
      return $rec;

    }
    function mes($id, $conexion) {
      $sql = "SELECT
                  YEAR(f.fecha) AS anio,
                  MONTH(f.fecha) AS mes,
                  COUNT(DISTINCT f.id_factura) AS cantidad_ventas,
                  SUM(p.Precio * df.cantidad) AS valor_total
              FROM
                  facturacion f
                  INNER JOIN detallesfactura df ON f.id_factura = df.factura
                  INNER JOIN productos p ON df.producto = p.id_producto
              GROUP BY
                  YEAR(f.fecha),
                  MONTH(f.fecha)";
      $result = mysqli_query($conexion, $sql);
  
      $ventas = array();
      while ($row = mysqli_fetch_assoc($result)) {
          $ventas[] = $row;
      }
  
      return $ventas;
  }
  


    ////////////////////// fin
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