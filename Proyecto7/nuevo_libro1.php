<?php
include_once("Cservicios.php");

$objconsulta=new Producto;
$result=$objconsulta->idlibro_max($conexion);
$autores=$objconsulta->mostrar_autores($conexion);
$row=mysqli_fetch_array($result);
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
          <h3>Libros</h3>
          <hr>
        </div>
      </div>

      <!-- Inicio Formulario -->
      <form id="form1" name="form1" method="post" action="recibe_libros.php">

        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-4">
            <label>ID Libro</label>
            <input type="text" class="form-control" name="idlibro" value="<?=$row['idmax'] ?>" readonly="false">
          </div>
          <br>
          <div class="col-sm-4 col-sm-offset-1">
            <label>Autor</label>
            <select class="form-control" name="idautor" id="idautor">
              <?php while ($r=mysqli_fetch_array($autores)) { ?>
              <option value="<?php echo $r['idautor'] ?>"><?php echo $r['nombre'] ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-sm-4 col-sm-offset-1">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre" required>
          </div>
          <br>
          <div class="col-sm-1"></div>
          <div class="col-sm-4">
            <label>Tipo</label>
            <select class="form-control" name="tipo" id="tipo">
              <option value="Ingeniería">Ingeniería</option>
              <option value="Literatura">Literatura</option>
              <option value="Informática">Informática</option>
              <option value="Historia">Historia</option>
              <option value="Medicina">Medicina</option>
            </select>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-4">
            <label>Editorial</label>
            <select class="form-control" name="editorial" id="editorial">
              <option value="Babel Libros">Babel Libros</option>
              <option value="Cangrejo Editores">Cangrejo Editores</option>
              <option value="Circulo de Lectores">Circulo de Lectores</option>
              <option value="Océano de Colombia">Océano de Colombia</option>
              <option value="Planeta">Planeta</option>
              <option value="Laguna Libros">Laguna Libros</option>
              <option value="Panamericana">Panamericana</option>
            </select>
          </div>
          <br>
          <div class="col-sm-4 col-sm-offset-1">
            <label>Año</label>
            <input type="text" class="form-control" name="año" required>
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
				<a href="nuevo_copia.php">Copia</a>
				<a href="nuevo_lector.php">Lector</a>
			</nav>
      <label for="btn-menu">✖️</label>
    </div>
  </div>
</html>
