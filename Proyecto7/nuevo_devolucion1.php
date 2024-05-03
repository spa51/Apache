<?php
include_once("Cservicios.php");

$objconsulta=new Producto;
$libros=$objconsulta->mostrar_libros($conexion);

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
      <div class="col-sm-4">
        <div class="btn-menu">
          <label for="btn-menu" class="icon-menu"><img src="img/estante.png" height="60" width="60"></label>
        </div>
      </div>
      <div class="col-sm-6"></div>
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
          <h3>Devolución</h3>
          <hr>
        </div>
      </div>

      <!-- Inicio Formulario -->
      <form id="form1" name="form1" method="post" action="recibe_devoluciones.php">

        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-4 col-xs-6">
            <label>Consecutivo</label>
            <input type="text" class="form-control" name="consecutivo" required>
          </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-4 col-xs-6">
            <label>ID Lector</label>
            <input type="text" class="form-control" name="idlector" required>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-sm-4 col-sm-offset-1">
            <label>Libro</label>
            <select class="form-control" name="idlibro" id="idlibro">
              <?php while ($r=mysqli_fetch_array($libros)) { ?>
              <option value="<?php echo $r['idlibro'] ?>"><?php echo $r['nombre'] ?></option>
              <?php } ?>
            </select>
          </div>
          <br>
          <div class="col-sm-4 col-sm-offset-1">
            <label>Fecha Devolución</label>
            <input type="date" class="form-control" name="fechaDev" value="<?=$fecha_actual?>">
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
