<?php

include_once("Clase.php");
$objeto=new Banco;
$clientes=$objeto->Clientes();
$movimi=$objeto->Movi();

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
      <td><div align="center"><span class="Estilo1">ID</span></div></td>
      <td><div align="center"><span class="Estilo1">Producto</span></div></td>
      <td><div align="center"><span class="Estilo1">Precio</span></div></td>
      <td><div align="center"><span class="Estilo1">Existencias</span></div></td>
      <td><div align="center"><span class="Estilo1">Stock Maximo</span></div></td>
      <td><div align="center"><span class="Estilo1">Stock Minimo</span></div></td>

    </tr>
    <?php $max = sizeof($clientes); ?>
    <?php $max2 = sizeof($movimi); ?>
    <?php  $i=0; while ($i<$max){
      $j=0;while ($j<$max2){
          if($clientes[$i][0]==$movimi[$j][0]){
            if ($movimi[$j][2]==1) {
              $clientes[$i][3]=$clientes[$i][3]-$movimi[$j][1];
            }
            else{
              $clientes[$i][3]=$clientes[$i][3]+$movimi[$j][1];
            }

          }
          $j=$j+1;
        }
        $i=$i+1;
    }?>
   <?php  $i=0; while ($i<$max){ ?>
    <tr>
      <td width="89"><?php echo $clientes[$i][0];?></td>
      <td width="149"><?php echo $clientes[$i][1];?></td>
      <td width="149"><?php echo $clientes[$i][2];?></td>
      <td width="149"><?php echo $clientes[$i][3];?></td>
      <td width="149"><?php echo $clientes[$i][4];?></td>
      <td width="149"><?php echo $clientes[$i][5];?></td>

    </tr>
    <?php $i=$i+1; ?>
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
