<?php
include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$vent=$objconsulta->mostrar_libros($conexion);
?>
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
<div class="container py-5 col-md-6">
  <div class="text-center ">
  <table class="table">
  <h2> <em> Libros</em></h2>
  <thead class="table-success ">
  <tr>
            <th scope="col">Id Libro</th>
            <th scope="col">Nombre</th>
            <th scope="col">Autor</th>
            <!--<th scope="col">Nacionalidad</th> -->
            <th scope="col">Genero</th>
            <!--<th scope="col">Editorial</th> -->
           <!-- <th scope="col">Año</th>-->
            <th scope="col">Estado</th>
          </tr>
  </thead>
  <tbody>
        <?php while($row=mysqli_fetch_array($vent)){ ?>
          <tr>
          <td align="center"><?php echo $row['id_libro'] ?></td>
          <td align="center"><?php echo $row['nombre_lib'] ?></td>
          <td align="center"><?php echo $row['nombre_aut'] ?></td>
          <!-- <td align="center"><?php echo $row['nacionalidad'] ?></td> -->
          <td align="center"><?php echo $row['genero'] ?></td>
          <!-- <td align="center"><?php echo $row['editorial'] ?></td> -->
          <!-- <td align="center"><?php echo $row['año'] ?></td> -->
          <td align="center"><?php echo $row['estado'] ?></td>
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