<?php
$id=$_POST['id'];
include_once("Cservicios.php");
$conexion=$objeto->connectDB();

$objconsulta=new Producto;
$result=$objconsulta->consultar_prod($id,$conexion);

if(empty($result)){
  echo "No hay datos";
}

$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ing. Antonio Borré B.</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="recibe_datos.php">
  <p align="center">INFORMACION</p>
  <table width="347" border="1" align="center">
  <tr>
    <td width="89">ID Producto</td>
    <td width="242">
      <label></label><?php echo $row['id'] ?></td>
  </tr>
  <tr>
    <td>Nombre</td>
    <td>
      <label></label><?php echo $row['nombre'] ?></td>
  </tr>
  <tr>
    <td>Unidades</td>
    <td>
      <label><?php echo $row['unidades'] ?></label></td>
  </tr>
  <tr>
    <td>Precio</td>
    <td>
      <label><?php echo $row['precio'] ?></label></td>
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
