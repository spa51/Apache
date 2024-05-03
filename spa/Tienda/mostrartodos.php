<?php
$id=$_POST['id'];
include_once("Clase.php");
$objeto=new Casa;
$idmatriz=$objeto->Matriz();
$nomatriz=$objeto->NoMatriz();
$vamatriz=$objeto->VaMatriz();



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
    <p align="center">Cliente </p>
    <table width="905" border="1" align="center" bordercolor="#CCCCCC">
    <tr>
      <td><div align="center"><span class="Estilo1">ID</span></div></td>
      <td><div align="center"><span class="Estilo1">Cliente</span></div></td>
      <td><div align="center"><span class="Estilo1">Telefono</span></div></td>

    </tr>
    <?php $max=sizeof($idmatriz); ?>
      <?php $i=0;while($i<$max){?>
      <?php if ($idmatriz[$i][0]==$id){?>
     <tr>
     <td width="89"><?php echo  $idmatriz[$i][0]?></td>
     <td width="89"><?php echo  $idmatriz[$i][1]?></td>
     <td width="89"><?php echo  $idmatriz[$i][2]?></td>
     </tr>
     <?php }; ?>
     <?php $i=$i+1;?>
     <?php } ?>
  </table>

  <p align="center">Ventas</p>
  <table width="905" border="1" align="center" bordercolor="#CCCCCC">
  <tr>
    <td><div align="center"><span class="Estilo1">Nro.</span></div></td>
    <td><div align="center"><span class="Estilo1">Fecha</span></div></td>

  </tr>
  <?php $max=sizeof($nomatriz); ?>
    <?php $i=0;while($i<$max){?>
    <?php if ($nomatriz[$i][1]==$id){?>
   <tr>
   <td width="89"><?php echo  $nomatriz[$i][0]?></td>
   <td width="89"><?php echo  $nomatriz[$i][2]?></td>
      </tr>
   <?php }; ?>
   <?php $i=$i+1;?>
   <?php } ?>
</table>
<p align="center">Factura</p>
<table width="905" border="1" align="center" bordercolor="#CCCCCC">
<tr>
  <td><div align="center"><span class="Estilo1">ID.Producto</span></div></td>
  <td><div align="center"><span class="Estilo1">Nro.Factura</span></div></td>
  <td><div align="center"><span class="Estilo1">Valor</span></div></td>

</tr>
<?php $max=sizeof($vamatriz); ?>
  <?php $i=0;while($i<$max){?>
    <?php $j=0;while($j<$max){?>
  <?php if ($nomatriz[$i][1]==$id && $nomatriz[$i][0]==$vamatriz[$j][1]){?>
 <tr>
 <td width="89"><?php echo  $vamatriz[$j][0]?></td>
 <td width="89"><?php echo  $vamatriz[$i][1]?></td>
 <td width="89"><?php echo  $vamatriz[$j][2]?></td>
 </tr>
 <?php }; ?>
 <?php $j=$j+1;?>
 <?php } ?>
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
