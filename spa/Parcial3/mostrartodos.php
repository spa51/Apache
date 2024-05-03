<?php
$id=$_POST['id'];
include_once("Clase.php");
$objeto=new Empresa;
$vendedor=$objeto->Vendedor();
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
  <p align="center">INFORME</p>
  <table width="1000" border="1" align="center" bordercolor="#CCCCCC">
    <tr>
      <td><div align="center"><span class="Estilo1">Escaleras ES-001</span></div></td>
      <td><div align="center"><span class="Estilo1">Escaleras ES-002</span></div></td>
      <td><div align="center"><span class="Estilo1">Precio ES-001</span></div></td>
      <td><div align="center"><span class="Estilo1">Precio ES-002</span></div></td>
      <td><div align="center"><span class="Estilo1">Total Ventas</span></div></td>
    </tr>
      <?php
    $max=sizeof($vendedor);
    $i=0; while($i<$max){
      if($id==$vendedor[$i][0]){
            $total=$valor[$j][2]*$productos[$k][2];
            $e1=$e1+$vendedor[$i][3];
            $e2=$e2+$vendedor[$i][4];
            $cont=$cont+$total; ?>
            <tr>
            <td width="60" align="center"><?php echo $ventas[$i][0] ?></td>
            <td width="80" align="center"><?php echo $ventas[$i][2] ?></td>
            <td width="89" align="center"><?php echo $valor[$j][1] ?></td>
            <td width="89"><?php echo $productos[$k][1] ?></td>
            <td width="60" align="center"><?php echo $valor[$j][2] ?></td>
            <td width="89"><?php echo number_format($productos[$k][2],2,'.',',') ?></td>
            <td width="89"><?php echo number_format($total,2,'.',',') ?></td>
            </tr>
        <?php
      }
        ?>
        <tr>
        <td width="60" align="center"><?php echo "" ?></td>
        <td width="80" align="center"><?php echo "" ?></td>
        <td width="89" align="center"><?php echo "" ?></td>
        <td width="89" align="center"><?php echo "" ?></td>
        <td width="60" align="center"><?php echo "" ?></td>
        <td width="89"><?php echo "Total:" ?></td>
        <td width="89"><?php echo number_format($cont,2,',','.') ?></td>
        </tr>
        <?
      $i++;
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
