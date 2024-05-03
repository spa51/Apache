<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta charset="utf-8">
  <link rel="stylesheet" href="css/index.css" media="screen">
<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />  -->
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="Datos.php">
  <table width="231" border="0" align="left">
    <tr>
      <td width="101"></td>
        <td  align="center" width="101">Area Del Triangulo </td>
    </tr>
    <tr>
      <td width="83">Base </td>
      <td width="101"><label>
        <input name="lado1" type="text" id="lado1" />
      </label></td>
    </tr>
    <tr>
      <td>altura</td>
      <td><label>
        <input name="lado2" type="text" id="lado2" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Calcular Area" />
      </label></td>
    </tr>
  </table>
</form>

<form id="form2" name="form2" method="post" action="Datos2.php">
  <table width="231" border="0" align="center right">
    <tr>
      <td width="101"></td>
      <td  align="center" width="101">Area De La Circunferencia </td>
        </tr>
    <tr>
      <td width="83">Radio </td>
      <td width="101"><label>
        <input name="lado1" type="text" id="lado1" />
      </label></td>
    </tr>
        <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Calcular Area" />
      </label></td>
    </tr>
  </table>

</form>

</body>
</html>
