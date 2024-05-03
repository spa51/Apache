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
      <td><div align="center"><span class="Estilo1">Trabajador</span></div></td>
      <td><div align="center"><span class="Estilo1">Horas</span></div></td>
      <td><div align="center"><span class="Estilo1">valor Hora</span></div></td>
      <td><div align="center"><span class="Estilo1">Bonificacion</span></div></td>
      <td><div align="center"><span class="Estilo1">Salario </span></div></td>

    </tr>
    <?php $max=sizeof($matriz);
    $i=0;while($i<$max){
    $matriz[$i][2]=($matriz[$i][1]*$hora)+$bono;
      $i=$i+1;
      }
      ?>

  <?php $i=0;while($i<$max){?>
  <tr>
    <td width="89"><?php echo  $matriz[$i][0];?></td>
    <td width="149"><?php echo $matriz[$i][1];?></td>
    <td width="149"><?php echo $hora;?></td>
    <td width="149"><?php echo $bono?></td>
    <td width="149"><?php echo $matriz[$i][2];?></td>
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
