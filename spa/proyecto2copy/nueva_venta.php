<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ing. Antonio Borré B.</title>
</head>

<body>
  <?php
  date_default_timezone_set('America/Bogota');
  $fecha_act=date("Y-m-d");
  ?>
<form id="form2" name="form2" method="post" action="recibe_datos2.php">
  <p align="center">REGISTRAR VENTAS </p>
  <table width="300" border="1" align="center">
  <tr>
    <td width="250">Consecutivo</td>
    <td width="242">
      <label>
        <input type="text"  name="consecutivo"  value=""/>
      </label>    </td>
  </tr>
  <tr>
    <td>ID</td>
    <td>
      <label>
        <input name="id" type="text" id="id"  />
      </label></td>
  </tr>
  <tr>
    <td>Unidades Vendidas</td>
	<td>
	 <label>
        <input type="text" name="uni_vendidas" />
      </label>    </td>
  </tr>
  <tr>
    <td>Fecha</td>
    <td>
      <label>
        <input type="date" name="fecha" value="<?= $fecha_act ?>"/>
      </label>    </td>
  </tr>
</table>
  <label>
  <div align="center">
    <input type="submit" name="Submit" value="Guardar" />
    <a href="index.php">Regresar</a></div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>
