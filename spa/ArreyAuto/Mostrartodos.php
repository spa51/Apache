<?php

include_once("Clase.php");
$objeto=new Depreciacion;
$matriz=$objeto->Matriz();
$result=$objeto->sumadigitos($matriz[0][1]);


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
      <td><div align="center"><span class="Estilo1">Años</span></div></td>
      <td><div align="center"><span class="Estilo1">Valores</span></div></td>
      <td><div align="center"><span class="Estilo1">Depreciacion</span></div></td>
        <td><div align="center"><span class="Estilo1">Nuevo Valor</span></div></td>

    </tr>
    <?php $k=0;
    $max=sizeof($matriz);
    while($k<$max){
    $i=1; $valor=$matriz[$k][0]; $n=$matriz[$k][1]; while ($i<=$matriz[$k][1]){
    ?>
    <tr>
      <?php $deprec=($valor*$n)/$result;
            $nuevo_valor=$valor-$deprec; ?>
      <td width="89"><?php echo $i ?></td>
      <td width="149"><?php echo number_format($valor,2,',','.') ?></td>
      <td width="149"><?php echo number_format($deprec,2,',','.') ?></td>
      <td width="149"><?php echo number_format($nuevo_valor,2,',','.') ?></td>
    </tr>
    <?php $i=$i+1; $valor=$nuevo_valor; $n=$n-1; ?>
    <?php }
    $k=$k+1;
    } ?>
  </table>

    <label>
    <div align="center">
      <input type="submit" name="Submit" value="Regresar" />
    </div>
  </form>
  <p align="center">&nbsp;</p>
  </body>
</html>
