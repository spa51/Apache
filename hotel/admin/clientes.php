<?php
include_once("../Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$vent=$objconsulta->mostrar_clientes($conexion);
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
      <div class="py-5 text-center">
        <img src="../img/32.png" alt="" width="72" height="72">
        <h2>Clientes</h2>
        <p class="lead">Bienvenidos al Hotel CherryBlue sera un placer tenerlos como nuestros futuros clientes.</p>
      </div>
<!-- Inicio -->
<div class="container py-3 col-md-5">
    <div class="text-center ">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">Cedula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Tarjeta</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row=mysqli_fetch_array($vent)){ ?>
          <tr>
            <td align="center">
              <?php echo $row['cedula'] ?>
            </td>
            <td align="center">
              <?php echo $row['nombre'] ?>
            </td>
            <td align="center">
              <?php echo $row['apellido'] ?>
            </td>
            <td align="center">
              <?php echo $row['telefono'] ?>
            </td>
            <td align="center">
              <?php echo $row['tarjeta'] ?>
            </td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div>


  </div>


    </main>
<!-- Fondo -->
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