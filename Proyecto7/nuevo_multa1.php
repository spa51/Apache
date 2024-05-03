<?php
$consecutivo=$_POST['consecutivo'];
$idlibro=$_POST['idlibro'];
$idlector=$_POST['idlector'];

include_once("Cservicios.php");
$objconsulta=new Producto;
$f=$objconsulta->calcular_multa($consecutivo,$idlector,$idlibro,$conexion);
$row=mysqli_fetch_array($f);
$d=$row['dias']*2;

date_default_timezone_set("America/Bogota");
$fecha_actual=date("Y-m-d");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/estilos1.css">
  <link rel="stylesheet" href="css/estilos2.css">
  <title>Registrar</title>
</head>
<body class="fondo">
  <header> <!-- Inicio barra de navegación -->
    <div class="container fondoMain">
      <div class="col-sm-2">
        <div class="btn-menu">
          <label for="btn-menu" class="icon-menu"><img src="img/estante.png" height="60" width="60"></label>
        </div>
      </div>
      <div class="col-sm-8"></div>
      <div class="col-sm-2">
        <nav class="menu">
          <b><a href="index.php">Inicio</a></b>
        </nav>
      </div>
		</div>
  </header> <!-- Fin barra de navegación -->
  <br>

  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-12" align="center">
          <h3>Multas</h3>
          <hr>
        </div>
      </div>

      <!-- Inicio Formulario -->
      <form id="form1" name="form1" method="post" action="recibe_multas.php">

        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-4 col-xs-6">
            <label>ID Lector</label>
            <input type="text" class="form-control" name="idlector"
            value="<?= $idlector?>">
          </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-4 col-xs-6">
            <label>Dias de retraso</label>
            <input type="text" class="form-control" value="<?= $row['dias']?>">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-4 col-xs-6">
            <label>Fecha Inicio</label>
            <input type="date" class="form-control" name="fechaInicio" id="fechaInicio"
            value="<?= $fecha_actual?>" >
          </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-4 col-xs-6">
            <label>Fecha Fin</label>
            <input type="date" class="form-control" name="fechaFin" id="fechaFin"
            value="<?= date('Y-m-d', strtotime($fecha_actual. '+'. $d.' days')) ?>" >
          </div>
        </div>
        <br>
        <div class="row margenTop"> <!-- Fila 6 -->
          <div class="col-sm-12 text-center"> <!-- Boton enviar -->
            <button type="submit">Aceptar</button>
          </div>
        </div>
        <br>
      </form>
    </div>
  </main>
  <input type="checkbox" id="btn-menu">
  <div class="container-menu">
    <div class="cont-menu">
      <nav>
				<br>
				<h4>&nbsp;&nbsp;&nbsp;Registrar</h4>
				<a href="nuevo_autor.php">Autor</a>
				<a href="nuevo_libro.php">Libro</a>
				<a href="nuevo_copia.php">Copia</a>
				<a href="nuevo_lector.php">Lector</a>
			</nav>
      <label for="btn-menu">✖️</label>
    </div>
  </div>
</html>
