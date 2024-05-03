<?php
$valor=$_POST['valor'];
$nan=$_POST['nan'];

include_once("Clase.php");

$objeto=new Depreciacion;
$result=$objeto->sumadigitos($nan);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
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
 <?php  $i=1; $n=$nan; while ($i<=$nan){
       //  $row=mysql_fetch_array($result); ?>
  <tr>
  <?php $deprec=($valor*$n)/$result;$nuevo_valor=$valor - $deprec; ?>
    <td width="89"><?php echo $i?></td>
    <td width="149"><?php echo number_format( $valor,2,',','.')?></td>
    <td width="149"><?php echo number_format( $deprec,2,',','.') ?></td>
    <td width="148"><?php echo number_format( $nuevo_valor,2,',','.') ?></td>
  </tr>
  <?php $i=$i+1;$valor=$nuevo_valor;$n=$n-1; ?>
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
