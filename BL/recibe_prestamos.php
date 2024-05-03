<?php
$idlector=$_POST['id_lector'];
$idlibro=$_POST['id_libro'];
$fecha=$_POST['fecha_prestamo'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;

$result2=$objconsulta->cantidad_libros($idlector,$conexion);
$row=mysqli_fetch_array($result2);
if ($row['libros']>=3) {
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


<div class="container py-5 col-md-15">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">¡No puedes prestar mas libros!</h4>
  <p>Has alcanzado la cantidad máxima de libros que puedes prestar, si desea prestar un libro devuelva uno y así podrá prestar otra vez.</p>
  <hr>
  <p class="mb-0">No olvide devolver los libros prestados antes de los 30 días hábiles.</p>
</div>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  
  </body>
</html>
<?php
}
else {
$result=$objconsulta->ingresar_prestamo($idlector,$idlibro,$fecha,$conexion);
$result=$objconsulta->ingresar_prestamo1($idlector,$idlibro,$fecha,$conexion);
$result=$objconsulta->ingresar_prestamo2($idlector,$idlibro,$fecha,$conexion);
}

?>
