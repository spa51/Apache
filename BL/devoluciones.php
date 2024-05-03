<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Biblioteca</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #82b74b;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"> <img src="img/journal-bookmark-fill.svg" alt="" width="20" height="20" class="d-inline-block align-text-center"> Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="prestamos.php">Prestamos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="devoluciones.php">Devoluciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="libros.php">Libros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="lectores.php">Lectores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="mprestamos.php">Lista de Prestamos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="mdevoluciones.php">Lista de Devoluciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Drogas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Inicio -->
<form id="form1" name="form1" method="post" action="recibe_devoluciones.php">
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="img/book.svg" alt="" width="72" height="57">
      <h2>Devoluciones</h2>
      <p class="lead">Formulario de Devoluciones de libros</p>
    </div>

    <div class="row g-6">
      <div class="col-md-7 col-lg-8">
          <form class="needs-validation" novalidate="">
          <div class="row g-3">
            
            <div class="col-sm-6">
              <label for="lector" class="form-label">ID Lector</label>
              <input type="text" class="form-control"  name="id_lector" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="libro" class="form-label">ID Libro</label>
              <input type="text" class="form-control"  name="id_libro" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>


            <div class="col-sm-6">
              <label for="fecha" class="form-label">Fecha de devolucion</label>
              <input type="date" class="form-control" name="fecha_devolucion"  placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

                  <hr class="my-4">

          <button class="w-100 btn btn-lg" style="background-color: #405d27;" type="submit">Guardar</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2021 Biblioteca</p>
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