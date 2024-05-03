<?php
$codigo=$_POST['codigo'];

include_once("clase.php");
$objeto=new Ventas;
$clientes=$objeto->Cliente();
$v=$objeto->Venta();
$valores=$objeto->Valores();
$pro=$objeto->Productos();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta charset="utf-8">
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
  <td><div align="center"><span class="estilo1">codigo</span></div></td>
  <td><div align="center"><span class="estilo1">Nombres</span></div></td>
  </tr>
  <?php $max=sizeof($clientes);
        $max2=sizeof($v);
        $max3=sizeof($valores);
        $max4=sizeof($pro);
        $i=0;while($i<$max){
          if($codigo==$v[$i][0]){
?>
  <tr>
    <td width="89"><?php echo  $clientes[$i][0];?></td>
    <td width="149"><?php echo $clientes[$i][1];?></td>
  </tr>
  <?php }$i=$i+1;} ?>
  <tr>
  <td><div align="center"><span class="estilo1">Factura</span></div></td>
  <td><div align="center"><span class="estilo1">Fechas</span></div></td>
  </tr>

  <?php
$i=0; while($i<$max2){
  if($codigo==$v[$i][0]){?>
    <tr>
    <td width="89"><?php echo $v[$i][0];?></td>
    <td width="149"><?php echo $v[$i][2];?></td>
    </tr>
    <td><div align="center"><span class="estilo1">Codigo</span></div></td>
    <td><div align="center"><span class="estilo1">Descripcion</span></div></td>
    <td><div align="center"><span class="estilo1">Unidades</span></div></td>
    <td><div align="center"><span class="estilo1">Precio</span></div></td>
    <td><div align="center"><span class="estilo1">Total</span></div></td>
<?php

 $j=0; while($j<$max3){
   if($v[$i][0]==$valores[$j][0]){?>
     <?php
      $k=0; while($k<$max4){
       if($valores[$j][1]==$pro[$k][0]){ $subtotal=$valores[$j][2]*$pro[$k][2];?>
         <tr>
         <td width="89"><?php echo  $valores[$j][1];?></td>
         <td width="149"><?php echo $pro[$k][1];?></td>
         <td width="149"><?php echo $valores[$j][2];?></td>
         <td width="149"><?php echo $pro[$k][2];?></td>
         <td width="149"><?php echo $subtotal;?></td>
         </tr>

        <?php  }$k++;}}$j++;}}$i++;}?>
</table>

  <div align="center">
    <input type="submit" name="Submit" value="Regresar" />
  </div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>
