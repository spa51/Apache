<?php
$idequipo=$_POST['idequipo'];
include_once("Cservicios.php");
$conexion=$objeto->connectDB();

$objconsulta=new Producto;
$vent=$objconsulta->consultar_equipo($idequipo,$conexion);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Mantenimiento</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="Index.php"> <img src="img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top"> Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="nuevo_cliente.php">Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nuevo_equipo.php">Equipo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nuevo_mantenimiento.php">Historial de Mantenimiento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nuevo_tipomant.php">Tipo de Mantenimiento</a>
        </li>
 
      </ul>
     </div>
  </div>
  </nav>
  <div class="nav-scroller bg-body shadow-sm">
  <nav class="nav nav-underline" aria-label="Secondary navigation">
    <a class="nav-link" href="consulta1.php">Equipos</a>
    <a class="nav-link" href="consulta2.php">Mantenimiento de Equipos</a>
    <a class="nav-link" href="consulta3.php">Pagos</a>
  </nav>
</div>
<!-- Inicio -->
<div class="container py-5 col-md-4">
  <div class="text-center ">
  <table class="table">
  <h2> <em> Historial</em></h2>
  <thead class="table-dark">
  <tr>
            <th scope="col">Manteminiento</th>
            <th scope="col">Valor</th>
            <th scope="col">Fecha</th>
          </tr>
  </thead>
  <tbody>
        <?php while($row=mysqli_fetch_array($vent)){ ?>
          <tr>
          <td align="center"><?php echo $row['descripcion'] ?></td>
          <td align="center"><?php echo $row['costo'] ?></td>
          <td align="center"><?php echo $row['fecha'] ?></td>
          </tr>
  </tbody>
  <?php } ?>
</table>
  </div>


</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  
  </body>
</html>