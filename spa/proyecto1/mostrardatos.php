<?php
 $cedula=$_POST['cedula'];
 include_once("Cservicios.php");
 $conexion = $objeto->connectDB();

 $objconsulta=new cCliente;
 $result=$objconsulta->consultar_cliente($cedula,$conexion);
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
    <title>Document</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="ingresar_cedula.php">
  <p align="center">INFORMACION PERSONAL </p>
  <table width="347" border="1" align="center">
  <tr>
    <td width="89">Cedula</td>
    <td width="242">
      <label></label><?php echo $row['cedula']?></td>
  </tr>
  <tr>
    <td>Nombres</td>
    <td>
      <label></label><?php echo $row['nombres']?></td>
  </tr>
  <tr>
    <td>Apellidos</td>
	<td>
	 <label></label><?php echo $row['apellidos']?></td>
  </tr>
  <tr>
    <td>Direccion</td>
    <td>
      <label></label><?php echo $row['direccion']?></td>
  </tr>

  <tr>
    <td>Email</td>
    <td>
      <label></label><?php echo $row['email']?></td>
  </tr>
  <tr>
    <td>Celular</td>
    <td>
      <label></label><?php echo $row['celular']?></td>
  </tr>
</table>
  <label>
  <div align="center">
        <a href="index.php">Regresar</a></div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>

