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
      <td><div align="center"><span class="Estilo1">Peso</span></div></td>
      <td><div align="center"><span class="Estilo1">Edad</span></div></td>
      <td><div align="center"><span class="Estilo1">Estatura</span></div></td>


<?php $max=sizeof($matriz); ?>

    </tr>

<?php $i=0;while($i<$max){?>
  <?php if ($matriz[$i][1]>=20 && $matriz[$i][2]>=175 && $matriz[$i][0]>=80 ):?>
     <tr>
     <td width="89"><?php echo  $matriz[$i][0];?></td>
     <td width="89"><?php echo  $matriz[$i][1];?></td>
     <td width="89"><?php echo  $matriz[$i][2];?></td>
     </tr>
     <?php endif; ?>
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
