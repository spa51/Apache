<?php
//Clase Manejadora de la base de datos y conexi�n con el servidor
class DBManager
{
	var $conect;

	//Constructor
	function DBManager()
	{
	}

	//Funci�n conectar con el servidor y la base de datos
	function conectar()
	{
		$con=@mysql_connect("127.0.0.1","root","15105101");
                if ($con==false)
		{
			echo "Error al conectarse con el servidor";
			exit();
		}
                else{
                       //echo "Hubo conexion con el servidor";
                     }
                 $result=@mysql_select_db("clase_ventas",$con);
		if ( $result==false)
		{
			echo "Error al seleccionar la base de datos";
			exit();
		}
                else{
                       //echo "Registrado Correctamente";
                     }
		$this->conect=$con;
		return true;
	}

}
?>
