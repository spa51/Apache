<?php
include_once("Cservicios.php");
$conexion=$objeto->connectDB();

$objconsulta=new Producto;
$result=$objconsulta->mostrar_prod($conexion);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta charset="utf-8">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/estilos.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ing. Antonio Borré B.</title>
<style type="text/css">
</style>
</head>
<body>
  <h3 align="center">Informe de Datos de Productos</h3>
  <narvar id="menu-principal">
    <a href="">Primera Opción</a>

    <a href="">Segunda Opción</a>
  </narvar>
  <table width="600" border="1" align="center">
    <thead>
      <tr>
        <th>ID Producto</th>
        <th>Nombre</th>
        <th>Unidades</th>
        <th>Precio Unitario</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row=mysqli_fetch_array($result)){ ?>
      <tr>
        <td width="20" align="center"><?php echo $row['id'] ?></td>
        <td width="80"><?php echo $row['nombre'] ?></td>
        <td width="20" align="center"><?php echo $row['unidades'] ?></td>
        <td width="40" align="center"><?php echo $row['precio'] ?></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>

  <footer>
    Derechos Reservados
  <footer>
</body>
</html>
