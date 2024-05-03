<?php 
include_once("Cservicios.php");
$conexion = $objeto->connectDB();
$objconsulta=new cCliente;
$result=$objconsulta->Mostrar_todo($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">  </style>
</head>
<body>
    <h3>Informe de Datos de Clientes</h3>
    <navbar id"=menu-principal">
        <a href="index.php">Primera Opcion</a>
        <a href="">Segunda Opcion</a>
    </navbar>
    <table width="905" border="1" align="center">
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Celular</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=mysqli_fetch_array($result)){ ?>

            <tr>
                <td><?php echo $row['cedula']?></td>
                <td><?php echo $row['nombres']?></td>
                <td><?php echo $row['apellidos']?></td>
                <td><?php echo $row['direccion']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['celular']?></td>
            </tr>
        </tbody>
        <?php }?>


    </table>
    <footer>
        Derechos Reservados
    </footer>
</body>
</html>