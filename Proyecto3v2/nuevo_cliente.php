<?php
include_once("Cservicios.php");
$conexion=$objeto->connectDB();

$objconsulta=new Producto;
$result=$objconsulta->idcliente_max($conexion);
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/estilos1.css">
  <title>Registrar</title>
</head>
<body class="fondo">
  <header> <!-- Inicio barra de navegación -->
    <div class="container fondoMain">
      <nav class="menu">
				<b><a href="index.php">Salir</a></b>
			</nav>
    </div>
  </header> <!-- Fin barra de navegación -->
  <br>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-12" align="center">
          <h3>Registrar Cliente</h3>
          <hr>
        </div>
      </div>

      <!-- Inicio Formulario -->
      <form id="form1" name="form1" method="post" action="recibe_datos4.php">

        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-4">
            <label>ID Cliente</label>
            <input type="text" class="form-control" name="idcliente" value="<?=$row['idmax'] ?>" readonly="false">
          </div>
          <div class="col-sm-4 col-sm-offset-1">
            <label>Nombres</label>
            <input type="text" class="form-control" name="nombres" required>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-4">
            <label>Apellidos</label>
            <input type="text" class="form-control" name="apellidos" required>
          </div>
          <div class="col-sm-4 col-sm-offset-1">
            <label>Dirección</label>
            <input type="text" class="form-control" name="direccion" required>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-4">
            <label>Email</label>
            <input type="text" class="form-control" name="email" required>
          </div>
          <div class="col-sm-4 col-sm-offset-1">
            <label>Celular</label>
            <input type="text" class="form-control" name="celular" required>
          </div>
        </div>
        <br>

        <div class="row margenTop"> <!-- Fila 6 -->
          <div class="col-sm-12 text-center"> <!-- Boton enviar -->
            <button type="submit" class="btn btn-info btn-lg">Siguiente</button>
          </div>
        </div>
        <br>
      </form>
    </div>
  </main>
</html>
