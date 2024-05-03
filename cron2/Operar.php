<?php
class Operaciones{
    function conectar(){
        $server = "localhost";
        $user = "root";
        $pass = "15105101";
        $bd = "ejemplo";
    
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

    function Agregar($conexion,$num1,$num2,$dife){
        $sql="INSERT INTO numeros(n1,n2,dife) VALUES('$num1', '$num2','$dife')";
        $rec = mysqli_query($conexion,$sql);
    }
}
?>