<?php
$taxiplaca=$_POST['candidato'];
$tfecha=$_POST['fecha'];
include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$kilop_query = $objconsulta->kiloplaca($taxiplaca, $conexion);
$kilop_data = mysqli_fetch_array($kilop_query);
$kilop_value = $kilop_data['kilometraje_final'];
$vent = $objconsulta->datostaxifecha($taxiplaca,$tfecha,$conexion);
$kilop_query2 = $objconsulta->kiloplaca22($taxiplaca,$tfecha,$conexion);
$kilop_data2 = mysqli_fetch_array($kilop_query2);
$kilop_value2 = $kilop_data2['km_recorridos'];
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

  <title>Biblioteca</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #fffb00;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"> <img src="img/Flag.svg" alt="" width="30" height="20"
          class="d-inline-block align-text-center"> Taxis</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="fecha.php">Busqueda por Fecha</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="intervalo.php">Busqueda por intervalo</a>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Taxi -->
  <div class="d-flex justify-content-center row-cols-md-3 mb-3 text-center">
    <div id="borde" class="card mb-4 rounded-3 shadow-sm  " style="
    margin-top: 10px;">
      <div id="cabeza"class="card-header py-3 text-black ">
        <h4 class="my-0 fw-normal">Taxi</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">
        <?= $taxiplaca?>
        </small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Kilometraje</li>
          <li><?= $kilop_value?></li>
          <ul class="list-unstyled mt-3 mb-4">
          <li>Recorrido en la fecha</li>
          <li><?= $kilop_value2?></li>
        </ul>
        </ul>
      </div>
    </div>
  </div>

  <!-- Taxi datos -->
  <div class="d-flex justify-content-center row-cols-md-3 mb-3 text-center">
    <div id="borde" class="card mb-4 rounded-3 shadow-sm  " style="
    margin-top: 10px;">
      <div id="cabeza"class="card-header py-3 text-black ">
        <h4 class="my-0 fw-normal">Historial</h4>
      </div>
  <table class="table table-bordered">
  <thead>
  <tr>
            <th scope="col">Fecha</th>
            <th scope="col">Inicio</th>
            <th scope="col">Fin</th>
          </tr>
  </thead>
  <tbody>
        <?php while($row=mysqli_fetch_array($vent)){ ?>
          <tr>
          <td align="center"><?php echo $row['fecha'] ?></td>
          <td align="center"><?php echo $row['inicio'] ?></td>
          <td align="center"><?php echo $row['final'] ?></td>
          </tr>
  </tbody>
  <?php } ?>
</table>
</div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>


</body>

</html>