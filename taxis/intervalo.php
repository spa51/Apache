<?php
include_once("Cservicios.php");
$conexion=$objeto->connectDB();

$objconsulta=new Producto;
$resultado=$objconsulta->verplacas($idcliente,$conexion);
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

  <title>Taxis</title>
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

  <!-- Inicio -->
   <!-- Formulario-->

   <form id="form1" name="form1" method="post" action="consulta3.php">
    <div class="d-flex justify-content-center">
      <div class="row g-2 p-4 bd-highlight">

                
        <div class="col-md">
          <div class="form-floating">
            <select class="form-select" name="candidato" aria-label="Floating label select example" required>
              <option selected></option>
              <?php
              while ($fila = mysqli_fetch_array($resultado)) {
                echo '<option value="' . $fila['placa'] . '">' . $fila['placa'] . '</option>';
            }
              ?>
            </select>
            <label for="candidato">Placas</label>
          </div>
        </div>
        <div class="col-md">
          <div class="form-floating">
            <input type="date" class="form-control" name="fecha" required 
              value="" />
            <label for="cedula">Fecha Inicial</label>
          </div>
        </div>
        <div class="col-md">
          <div class="form-floating">
            <input type="date" class="form-control" name="fechaf" required 
              value="" />
            <label for="cedula">Fecha Final</label>
          </div>
        </div>
        <button class="w-100 btn btn-lg" style="background-color: #fffb00" type="submit">
          Buscar
        </button>

      </div>
      
    </div>


  </form>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>


</body>

</html>