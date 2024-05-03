<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body background="fondo 1.jpeg">
<form id="form1" name="form1" method="post" action="mostrarFechaFactura.php">
  <p align="center" style="color: #C2FF33">INGRESE LAS FECHAS </p>
  <table width="324" height="49" border="1" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="144" height="27" valign="top" style="color: red" align="center">FECHA 1(AA-MES-DIA)</td>
    <td width="147" valign="top">
      <label>
        <input name="fecha1" type="text" id="fecha1" />
      </label></td>
    </tr>
    <tr>
      <td width="144" height="27" valign="top" style="color: red" align="center">FECHA 2(AA-MES-DIA)</td>
      <td width="147" valign="top">
        <label>
          <input name="fecha2" type="text" id="fecha2" />
        </label></td>
      </tr>

  <tr>
    <td height="23" colspan="2" valign="top"><label>
      <div align="center">
        <input type="submit" name="Submit" value="Buscar" />
        <a href="index.php" style="color: red">Regresar</a></div>
      </label></td>
    </tr>
</table>
</form>
</body>
</html>
