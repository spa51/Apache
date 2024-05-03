<?php

$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];

//echo $cedula;
include_once("Cservicios.php");



$objconsulta=new cGlobal;
$result=$objconsulta->consultar_facturafecha($fecha1, $fecha2);

 // while ($row=mysql_fetch_array($result))
// $row=mysql_fetch_array($result);

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
<form id="form1" name="form1" method="post" action="buscar_por_fechaFactura.php">
  <p align="center">INFORMACION GENERAL </p>
  <table width="905" border="1" align="center" bordercolor="#CCCCCC">
  <tr>
    <td><div align="center"><span class="Estilo1">num_factura</span></div></td>

  </tr>
 <?php while ($row=mysql_fetch_array($result)){
       //  $row=mysql_fetch_array($result); ?>
  <tr>
    <td width="89"><?php echo $row['num_factura'] ?></td>
  </tr>
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
