<?php 
$id=$_POST['id'];
include_once("Cservicios.php");
$conexion = $objeto->connectDB();

$objconsulta=new cProducto;
$result=$objconsulta->consultar_producto($id,$conexion);
if (empty($result)) {
    echo "no hay datos";

}

$row=mysqli_fetch_array($result);
?>

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
<form id="form1" name="form1" method="post" action="recibe_datos2.php">
  <p align="center">ACTUALIZAR PRODUCTO </p>
  <table width="347" border="1" align="center">
  <tr>
    <td width="89">Id</td>
    <td width="242">
      <label>
        <input type="text"  name="id"  value="<?= $row['id']?>"/>
      </label>    </td>
  </tr>
  <tr>
    <td>Producto</td>
    <td>
      <label>
        <input name="producto" type="text" id="producto" value="<?= $row['producto']?>" />
      </label></td>
  </tr>
  <tr>
    <td>Unidades</td>
	<td>
	 <label>
        <input type="text"  name="unidades" value="<?= $row['unidades']?>"/>
      </label>    </td>
  </tr>
  <tr>
    <td>Precio</td>
    <td>
      <label>
        <input type="text"  name="precio" value="<?= $row['precio']?>" />
      </label>    </td>
  </tr>

</table>
  <label>
  <div align="center">
    <input type="submit" name="Submit" value="Guardar" />
    <a href="ingresar_id2.php">Regresar</a></div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>