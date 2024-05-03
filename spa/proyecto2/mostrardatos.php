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
<form id="form1" name="form1" method="post" action="ingresar_id.php">
  <p align="center">INFORMACION </p>
  <table width="347" border="1" align="center">
  <tr>
    <td width="89">ID</td>
    <td width="242">
      <label></label><?php echo $row['id']?></td>
  </tr>
  <tr>
    <td>Produto</td>
    <td>
      <label></label><?php echo $row['producto']?></td>
  </tr>
  <tr>
    <td>Unidades</td>
	<td>
	 <label></label><?php echo $row['unidades']?></td>
  </tr>
  <tr>
    <td>Precio</td>
    <td>
      <label></label><?php echo $row['precio']?></td>
  </tr>

</table>
  <label>
  <div align="center">
        <a href="index.php">Regresar</a></div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>

