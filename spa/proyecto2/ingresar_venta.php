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
  $fecha=date("Y-m-d");
  ?>
<form id="form1" name="form1" method="post" action="recibe_datos3.php">
  <p align="center">REGISTRAR VENTA </p>
  <table width="347" border="1" align="center">
  
  <tr>
    <td >Id</td>
    <td >
      <label>
        <input type="text" name="id"  />
      </label>    </td>
  </tr>
  <tr>
    <td>Vendidas</td>
	<td>
	 <label>
        <input type="text"  name="vendidas" />
      </label>    </td>
  </tr>
  <tr>
    <td>Fecha</td>
    <td>
      <label>
        <input type="date"  name="fecha" value="<?=$fecha?>"/>
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