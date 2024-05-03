<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body background="fondo 1.jpeg">
<form id="form1" name="form1" method="post" action="recibe_datos.php">
  <p align="center" style="color: #C2FF33">INGRESAR PRODUCTO </p>
  <table width="347" border="1" align="center">
  <tr>
    <td style="color: red" align="center">id_producto</td>
    <td>
      <label>
        <input name="id_producto" type="text" value="" />
      </label></td>
  </tr>
  <tr>
    <td width="89" style="color: red" align="center">nombre</td>
    <td width="242">
      <label>
        <input type="text"  name="nombre"  value=""/>
      </label>    </td>
  </tr>
  <tr>
    <td style="color: red" align="center">precio</td>
    <td>
      <label>
        <input name="precio" type="text" value="" />
      </label></td>
  </tr>
  <tr>
    <td style="color: red" align="center">existencias</td>
    <td>
      <label>
        <input name="existencias" type="text" value="" />
      </label></td>
  </tr>
  <tr>
    <td width="89" style="color: red" align="center">id_proveedor</td>
    <td width="242">
      <label>
        <input type="text"  name="id_proveedor"  value=""/>
      </label>    </td>
  </tr>

</table>
  <label>
  <div align="center">
    <input type="submit" name="Submit" value="Guardar" />
    <a href="index.php" style="color: red">Regresar</a></div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>
