<?php 
$id=$_POST['id'];
include_once("Cservicios.php");
$conexion = $objeto->connectDB();
$objconsulta=new cProducto;
$result=$objconsulta->consultar_ventas($id,$conexion);
$result2=$objconsulta->consultar_ventas($id,$conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
    <style type="text/css">  </style>
</head>
<body>
    <h3>Informe de Producto</h3>
    <navbar id"=menu-principal">
        <a href="index.php">Primera Opcion</a>
        <a href="">Segunda Opcion</a>
    </navbar>
    <table width="905" border="1" align="center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Unidades</th>
                
            </tr>
        </thead>
        <tbody>
    <?php $row=mysqli_fetch_array($result) ?>
      <tr>
        <td width="20" align="center"><?php echo $row['id'] ?></td>
        <td width="80"><?php echo $row['producto'] ?></td>
        <td width="20" align="center"><?php echo $row['unidades'] ?></td>
      </tr>
    </tbody>
    <?php  ?>
  </table>
  <br></br>
  <table width="500" border="1" align="center">
    <thead>
      <tr>
        <th>Consecutivo</th>
        <th>Unidades Vendidas</th>
        <th>Fecha</th>
      </tr>
    </thead>
    <tbody>
        <tbody>
            <?php while($row=mysqli_fetch_array($result2)){ ?>
                <tr>
                    <td width="20" align="center"><?php echo $row['consecutivo'] ?></td>
                    <td width="80" align="center"><?php echo $row['vendidas'] ?></td>
                    <td width="40" align="center"><?php echo $row['fecha'] ?></td>
                </tr>
        </tbody>
        <?php }?>


    </table>
    <footer>
        Derechos Reservados
    </footer>
</body>
</html>