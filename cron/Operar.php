<?php
class Operaciones{
    function buscar($conexion){
        $sql='SELECT CURDATE()';
        $rec2 = mysqli_query($conexion,$sql);
        return $rec2;
    }

    function conectar(){
        $server = "localhost";
        $user = "root";
        $pass = "15105101";
        $bd = "ejemplo2";
    
        $conexion = mysqli_connect($server, $user, $pass,$bd);
        if (!$conexion) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        else{
            echo "";
            return $conexion;
        }
    }

    function Agregar($conexion,$fecha){
        $sql="INSERT INTO clientes(id,nombre,fecha) VALUES('92', 'camilo', '$fecha')";
        $rec = mysqli_query($conexion,$sql);
    }
}

?>