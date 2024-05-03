<?php
include_once("Cservicios.php");
$conexion=$objeto->connectDB();

$objconsulta=new Producto;
$result=$objconsulta->idtipo_max($conexion);
$row=mysqli_fetch_array($result);
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
<form id="form1" name="form1" method="post" action="recibe_tipomant.php">
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="img/logo.png" alt="" width="72" height="57">
      <h2>Tipo de Mantenimiento</h2>
      <p class="lead">Formulario.</p>
    </div>

    <div class="row g-6">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Tipo de Mantenimiento</h4>
        <form class="needs-validation" novalidate="">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="idcliente" class="form-label">ID</label>
              <input type="text" class="form-control" name="idcliente" value="<?=$row['idmax'] ?>" readonly="false" placeholder="" value="" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-7">
              <label for="nombres" class="form-label">Descripcion</label>
              <input type="text" class="form-control"  name="descripcion" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="direccion" class="form-label">Valor</label>
              <input type="text" class="form-control"  name="costo" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>



          <hr class="my-4">

          <button class="w-100 btn btn-dark btn-lg" type="submit">Guardar</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2021 Mantenimiento</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  
  </body>
</html>