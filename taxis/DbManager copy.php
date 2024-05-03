<?php
//Clase Manejadora de la base de datos y conexi�n con el servidor
class DBManager
{
	var $conexion;

	function connectDB(){

    $server = "localhost";
    $user = "root";
    $pass = "root12345";
    $bd = "taxis";

  $conexion = mysqli_connect($server, $user, $pass,$bd);
	if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
	}
	else
		echo "";

    return $conexion;
   }
}
?>
