<?php
include_once("DbManager.php");
$objeto=new DBManager();

class Producto{

    function ingresar_datos($nombre,$email,$telefono,$comentario,$conexion)
    {
      $sql="insert into datos(nombre,email,telefono,comentario) VALUES('$nombre','$email','$telefono','$comentario')";
      $rec=mysqli_query($conexion,$sql);
        
      include_once("index.html");
    }

}

?>