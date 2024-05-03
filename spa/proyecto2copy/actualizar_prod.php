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
<form id="form1" name="form1" method="post" action="recibe_datos3.php">
  <p align="center">ACTUALIZAR DATOS </p>
  <table width="347" border="1" align="center">
  <tr>
    <td width="100">ID</td>
    <td width="242">
      <label>
        <input type="text"  name="id"  value="<?=$row['id']?>"/>
      </label>    </td>
  </tr>
  <tr>
    <td>Nombre</td>
    <td>
      <label>
        <input name="nombre" type="text" id="nombre" value="<?=$row['nombre']?>"  />
      </label></td>
  </tr>
  <tr>
    <td>Unidades</td>
	<td>
	 <label>
        <input type="text"  name="unidades" value="<?=$row['unidades']?>" />
      </label>    </td>
  </tr>
  <tr>
    <td>Precio</td>
    <td>
      <label>
        <input type="text"  name="precio" value="<?=$row['precio']?>" />
      </label>    </td>
  </tr>
</table>
  <label>
  <div align="center">
    <input type="submit" name="Submit" value="Guardar" />
    <a href="ingresar_producto2.php">Regresar</a></div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>
