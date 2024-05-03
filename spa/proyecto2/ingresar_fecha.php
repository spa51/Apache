<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>
<body>
  <?php
  date_default_timezone_set('America/Bogota');
  $fecha1=date("Y-m-d");
  $fecha2=date("Y-m-d");
  ?>
<form id="form1" name="form1" method="post" action="mostrarventas2.php">
  <p align="center">INGRESAR FECHA VENTA </p>
  <table width="347" border="1" align="center">
  
  <tr>
    <td>Fecha inicial</td>
    <td>
      <label>
        <input type="date"  name="fecha1"   value="<?=$fecha1?>"/>
      </label>    </td>
  </tr>
  <tr>
    <td>Fecha final </td>
    <td>
      <label>
        <input type="date"  name="fecha2" value="<?=$fecha2?>"/>
      </label>    </td>
  </tr>

</table>
  <label>
  <div align="center">
    <input type="submit" name="Submit" value="Buscar" />
    <a href="index.php">Regresar</a></div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>