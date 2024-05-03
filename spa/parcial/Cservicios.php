<?php

include_once ("DbManager.php");

$objeto=new DBManager();

class cCliente{
    function consultar($id,$conexion){
        $sql="SELECT p.id,v.id, p.nombre, v.nota1,v.nota2,v.nota3,v.nota4,((v.nota1+v.nota2+v.nota3+v.nota4)/4) AS Promedio FROM estudiantes p, calificaciones v WHERE p.id='$id' AND p.id=v.id";
        $rec=mysqli_query($conexion,$sql);
        if($rec==""){
            #$promedio=('nota1'+'nota2'+'nota3'+'nota4'/4);
                      $_SESSION['k_id']=$row['id'];
          echo $_SESSION['k_id'];
        }
        return $rec;
      }

}



?>