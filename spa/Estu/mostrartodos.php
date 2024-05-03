<?php

include_once("Clase.php");
$objeto=new Casa;
$matriz=$objeto->Matriz();



 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
    <!--
    .Estilo1 {color: #FF0000}
    -->
    </style>
  </head>
  <body>
  <form id="form1" name="form1" method="post" action="index.php">
    <p align="center">INFORMACION GENERAL </p>
    <table width="905" border="1" align="center" bordercolor="#CCCCCC">
    <tr>
      <td><div align="center"><span class="Estilo1">Id</span></div></td>
      <td><div align="center"><span class="Estilo1">Nombre</span></div></td>
      <td><div align="center"><span class="Estilo1">Nota 1</span></div></td>
      <td><div align="center"><span class="Estilo1">Nota 2</span></div></td>
      <td><div align="center"><span class="Estilo1">Nota 3</span></div></td>
      <td><div align="center"><span class="Estilo1">Definitiva</span></div></td>
      <td><div align="center"><span class="Estilo1">Estado</span></div></td>


<?php $max=sizeof($matriz); ?>

    </tr>

<?php $i=0;while($i<$max){?>
<?php $matriz[$i][5]=(($matriz[$i][2]+$matriz[$i][3]+$matriz[$i][4])/3); ?>
<?php
if($matriz[$i][5]>=3.0)
        $matriz[$i][6]="Aprobado";
    else
        $matriz[$i][6]="Reprobado";

?>
     <tr>
     <td width="89"><?php echo  $matriz[$i][0];?></td>
     <td width="89"><?php echo  $matriz[$i][1];?></td>
     <td width="89"><?php echo  $matriz[$i][2];?></td>
     <td width="89"><?php echo  $matriz[$i][3];?></td>
     <td width="89"><?php echo  $matriz[$i][4];?></td>
     <td width="89"><?php echo  $matriz[$i][5];?></td>
     <td width="89"><?php echo  $matriz[$i][6];?></td>
     </tr>

     <?php $i=$i+1;?>
<?php } ?>



  </table>

    <label>
    <div align="center">
      <input type="submit" name="Submit" value="Regresar" />
    </div>
  </form>
  <p align="center">&nbsp;</p>
  </body>
</html>
