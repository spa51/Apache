<?php
 $id=$_POST['id'];
 include_once("Cservicios.php");
 $conexion = $objeto->connectDB();

 $objconsulta=new cCliente;
 $result=$objconsulta->consultar($id,$conexion);
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
  <p align="center">INFORMACION ESTUDIANTE </p>
  <table width="347" border="1" align="center">
  <tr>
    <td width="89">Cedula</td>
    <td width="242">
      <label></label><?php echo $row['id']?></td>
  </tr>
  <tr>
    <td>Nombres</td>
    <td>
      <label></label><?php echo $row['nombre']?></td>
  </tr>
  <tr>
    <td>Nota 1</td>
	<td>
	 <label></label><?php echo $row['nota1']?></td>
  </tr>
  <tr>
    <td>Nota 2</td>
    <td>
      <label></label><?php echo $row['nota2']?></td>
  </tr>

  <tr>
    <td>Nota 3</td>
    <td>
      <label></label><?php echo $row['nota3']?></td>
  </tr>
  <tr>
    <td>Nota 4</td>
    <td>
      <label></label><?php echo $row['nota4']?></td>
  </tr>
  <tr>
    <td>Promedio</td>
    <td>
      <label></label><?php echo $row['Promedio']?></td>
  </tr>
</table>
  <label>
  <div align="center">
        <a href="index.php">Regresar</a></div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>

