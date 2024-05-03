
<?php
include_once("Manager.php");

$objeto = new DBManager();

class Producto {

    function mostrar($conexion) {
        $sql = "SELECT * FROM cliente";
        $rec = mysqli_query($conexion, $sql);
        return $rec;
    }

    function modificar($conexion, $id, $name, $address, $phone){
        $sql = "UPDATE cliente SET nombres = '$name' ,direccion = '$address',telefono = '$phone'  WHERE idcliente= '$id'";
        $rec=mysqli_query($conexion,$sql);
        return $rec;
    }
    function eliminar($conexion, $id){
        $sql = "DELETE FROM cliente WHERE idcliente= '$id' ";
        $rec=mysqli_query($conexion,$sql);
        return $rec;
    }
}
?>