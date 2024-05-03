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
<div class="container">
    <main>
      <div class="py-5 text-center">
        <img src="../img/32.png" alt="" width="72" height="72">
        <h2>Factura</h2>
        <p class="lead">Bienvenidos al Hotel CherryBlue sera un placer tenerlos como nuestros futuros clientes.</p>
      </div>
<!-- Inicio -->
<form id="form1" name="form1" method="post" action="mostrar_f.php">
    <div class="d-flex justify-content-center">
      <div class="row g-2 p-4 bd-highlight">
        <div class="col-md">
          <div class="form-floating">
            <input type="text" class="form-control" name="cedula" required 
              value="" />
            <label for="cedula">Cedula</label>
          </div>
        </div>
    
        <button class="w-100 btn btn-primary btn-lg" type="submit">
          Buscar
        </button>
      </div>
    </div>
  </form>

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