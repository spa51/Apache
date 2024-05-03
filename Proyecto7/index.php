<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,user-scalable=no">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilos1.css" media="screen">
	<link rel="stylesheet" href="css/estilos2.css" media="screen">
	<title>Inicio</title>
</head>

<body class="fondo">
	<header> <!-- Inicio barra de navegación -->
    <div class="container fondoMain">
      <div class="col-sm-4">
        <div class="btn-menu">
          <label for="btn-menu" class="icon-menu"><img src="img/estante.png" height="60" width="60">&nbsp; Menú</label>
        </div>
      </div>
		</div>
  </header> <!-- Fin barra de navegación -->
	<br>
	<main>
		<div class="content">
			<br>
			<h2>Sistema Bibliotecario</h2>
			<hr>
			<div class="col-sm-3"></div>
			<div class="col-sm-3">
				<img src="img/libros.png" height="180" width="180">
				<a href="nuevo_prestamo.php"><button type="button">Hacer Prestamo</button></a>
			</div>
			<div class="col-sm-3">
				<img src="img/devolver.png" height="180" width="180">
				<a href="nuevo_devolucion.php"><button type="button">Devolver Libro</button></a>
			</div>
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
	</body>
		<br>
	</div>
