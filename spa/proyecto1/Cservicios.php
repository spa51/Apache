<?php

include_once ("DbManager.php");

$objeto=new DBManager();

class cCliente{
    function registrar_cliente($cedula,$nombres,$apellidos,$direccion,$email,$celular,$conexion){
        $sql="insert into tclientes(cedula,nombres,apellidos,direccion,email,celular) VALUES('$cedula','$nombres','$apellidos','$direccion','$email','$celular')";
        $rec = mysqli_query($conexion,$sql);

        include_once ("registrardatos.php");
    }
    //buscar
    function consultar_cliente($cedula,$conexion){
        $sql="SELECT * from tclientes where cedula='$cedula'";
        $rec = mysqli_query($conexion,$sql);
        if ($rec=="") {
            $_SESSION['k_cedula'] = $row['cedula'];
            echo $_SESSION['k_cedula'];
    
        }
    return $rec;
    }

    function Mostrar_todo($conexion){
        $sql = 'SELECT * FROM tclientes';
        $rec = mysqli_query($conexion,$sql);
        return $rec;
    }
    

}



?>