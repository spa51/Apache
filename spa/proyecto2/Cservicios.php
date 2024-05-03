<?php

include_once ("DbManager.php");

$objeto=new DBManager();

class cProducto{
    function registrar_producto($id,$producto,$unidades,$precio,$conexion){
        $sql="INSERT INTO tproductos(id,producto,unidades,precio) VALUES('$id','$producto','$unidades','$precio')";
        $rec = mysqli_query($conexion,$sql);

        include_once ("agregardatos.php");
    }
    //buscar
    function consultar_producto($id,$conexion){
        $sql="SELECT * from tproductos where id='$id'";
        $rec = mysqli_query($conexion,$sql);
        if ($rec=="") {
            $_SESSION['k_id'] = $row['id'];
            echo $_SESSION['k_id'];
    
        }
    return $rec;
    }

    function Mostrar_todo($conexion){
        $sql = 'SELECT * FROM tproductos';
        $rec = mysqli_query($conexion,$sql);
        return $rec;
    }

    function actualizar_producto($id,$producto,$unidades,$precio,$conexion){
        $sql="UPDATE tproductos SET  producto='$producto',unidades='$unidades',precio='$precio' WHERE id='$id'";
        $rec=mysqli_query($conexion,$sql);
    
        include_once("ingresar_id2.php");
        

    }

    function registrar_venta($consecutivo,$id,$vendidas,$fecha,$conexion)
    {
      $sql="INSERT INTO tventas(consecutivo,id,vendidas,fecha) VALUES('$consecutivo','$id','$vendidas','$fecha')";
      $rec=mysqli_query($conexion,$sql);
  
      include_once("ingresar_venta.php");
    }

    function consultar_ventas($id,$conexion){
        $sql="SELECT p.id,v.id, v.consecutivo, p.producto, p.unidades, v.vendidas, v.fecha FROM tproductos p, tventas v WHERE p.id='$id' AND p.id=v.id";
        $rec=mysqli_query($conexion,$sql);
        if($rec==""){
          $_SESSION['k_id']=$row['id'];
          echo $_SESSION['k_id'];
        }
        return $rec;
      }
      function mostrar_ventas($conexion){
        $sql="SELECT * FROM tventas ORDER BY tventas.fecha ASC" ;
        $rec=mysqli_query($conexion,$sql);
        return $rec;
      }
      function mostrar_ventas_fecha($fecha1,$fecha2,$conexion){
        $sql="SELECT * FROM tventas WHERE fecha>='$fecha1' and fecha <='$fecha2' ORDER BY tventas.fecha ASC " ;
        $rec=mysqli_query($conexion,$sql);
        return $rec;
      }
      function consultar_ventas2($id,$conexion){
        $sql="SELECT p.id,p.nombres,p.celular,f.id_factura,f.fecha, f.id_cliente,v.consecutivo,v.nfactura,v.vendidas, b.id_producto, b.producto, b.unidades, b.precio FROM tclientes p, tventas2 v, tfactura f, tproductos b WHERE p.id='$id' AND p.id=f.id_cliente AND f.id_factura=v.nfactura  AND v.id_producto=b.id_producto " ;
        $rec=mysqli_query($conexion,$sql);
        if($rec==""){
          $_SESSION['k_id']=$row['id'];
          echo $_SESSION['k_id'];
        }
        return $rec;
      }
    

}



?>