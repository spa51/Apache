<?php
$idcliente=$_POST['cedula'];
include_once("../Cservicios.php");
$conexion=$objeto->connectDB();

$objconsulta=new Producto;
$vent=$objconsulta->buscar_cliente($idcliente,$conexion);
$vent1=$objconsulta->factura($idcliente,$conexion);
$vent2=$objconsulta->factura($idcliente,$conexion);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

  <title>Hotel CherryBlue</title>
</head>
<body>
<!-- nav -->
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="reserva.php">Reservar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="minimark.php">MiniMark</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="facturar.php">Factura</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="clientes.php">Clientes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="reservas.php">Reservas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../login/salir.php">Salir</a>
  </li>
  
  <!-- <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li> -->
</ul>
<!-- Logo -->
<div class="container">
    <main>
      <div class="py-3 text-center">
        <img src="../img/32.png" alt="" width="72" height="72">
        <h2>Hotel CherryBlue</h2>
      </div>
      <!-- tablas -->
      <div class="container py-5 col-md-4">
  <div class="text-center ">
  <table class="table">
  <h2> <em>Factura</em></h2>
  <thead class="table-dark">
  <tr>
            <th scope="col">Cedula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
          </tr>
  </thead>
  <tbody>
        <?php $row=mysqli_fetch_array($vent) ?>
          <tr>
            <td width="20" align="center"><?php echo $row['cedula'] ?></td>
            <td width="80"><?php echo $row['nombre'] ?></td>
            <td width="80"><?php echo $row['apellido'] ?></td>
            <td width="80"><?php echo $row['telefono'] ?></td>
          </tr>
  </tbody>
  <?php  ?>
</table>
<!-- Tabla xx -->
<table class="table">
  <h2> <em></em></h2>
  <thead class="table-dark">
  <tr>
            <th scope="col">ID</th>
            <th scope="col">Producto</th>
            <th scope="col">Valor</th>
          </tr>
  </thead>
  <tbody>
        <?php while($row=mysqli_fetch_array($vent2)){?>
        <?php $cont = $cont+$row['precio'];?>
          <tr>
            <td width="20" align="center"><?php echo $row['id_mini'] ?></td>
            <td width="80"><?php echo $row['producto']?></td>
            <td width="80"><?php echo number_format($row['precio'],2,',','.') ?></td>
          </tr>
          <?php } ?>
          <tr>
          <td><?php echo "" ?></td>
        <td><b><?php echo "Subtotal:" ?></b></td>
        <td><?php echo number_format($cont,2,',','.') ?></td>
          </tr>
  </tbody>
  <?php  ?>
</table>
<!-- ssss -->
<table class="table">
  <h2> <em></em></h2>
  <thead class="table-dark">
  <tr>
            <th scope="col">Dias</th>
            <th scope="col">Valor dia</th>
            <th scope="col">Mini</th>
            <th scope="col">Total</th>
          </tr>
  </thead>
  <tbody>
        <?php $row=mysqli_fetch_array($vent1) ?>
        <?php $total=$row['dias']*$row['valor']+$cont?>
          <tr>
            <td width="20" align="center"><?php echo $row['dias'] ?></td>
            <td width="80"><?php echo number_format($row['valor'],2,',','.') ?></td>
            <td width="80"><?php echo number_format($cont,2,',','.') ?></td>
            <td width="80"><?php echo number_format($total,2,',','.' )?></td>
          </tr>
  </tbody>
  <?php  ?>
</table>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2021 CherryBlue</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>


      <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>