<?php 
include_once("Cservicios.php");
$conexion = $objeto->connectDB();
$objconsulta=new cProducto;
$result=$objconsulta->Mostrar_todo($conexion);
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
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=mysqli_fetch_array($result)){ ?>

            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['producto']?></td>
                <td><?php echo $row['unidades']?></td>
                <td><?php echo $row['precio']?></td>

            </tr>
        </tbody>
        <?php }?>


    </table>
    <footer>
        Derechos Reservados
    </footer>
</body>
</html>