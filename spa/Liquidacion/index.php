<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<script type="text/javascript">

</script>
<form id="servi" name="servi" method="post" action="recibe_datos.php" onSubmit="return verificar(this)">
  <p align="center">LIQUIDACION</p>
  <table width="318" border="1" align="center">
    <tr>
      <td>Salario Mensual</td>
      <td><input name="salario" type="text" id="salario" /required></td>
    </tr>
    <tr>
      <td>Dias Trabajados</td>
      <td><input name="dias" type="text" id="dias" /required></td>
    </tr>
    <tr>
      <td>Dias Trabajados en el Semestre</td>
      <td><input name="diassem" type="text" id="diassem" /required></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Calcular" />
        </div>
      </label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
