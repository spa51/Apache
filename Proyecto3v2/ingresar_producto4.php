<?php
	session_start();
	if (isset($_SESSION['k_password']))
	{
	?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/estilos1.css" media="screen">
  <title>Consultar</title>
</head>
<body class="fondo">
	<header> <!-- Inicio barra de navegación -->
		<div class="container fondoMain">
			<div class="btn-menu">
				<label for="btn-menu" class="icon-menu">☰ Menú</label>
			</div>
		<nav class="menu">
			<b><a href="logout.php">Cerrar Sesión</a></b>
			<b><a href="#"><?php echo 'Hola, '; echo $_SESSION['k_nombres']; ?></a></b>
		</nav>
	</div>
	</header> <!-- Fin barra de navegación -->
	<br>
  <main>
    <div class="container">
      <!-- Título del Formulario -->
      <form id="form1" name="form1" method="post" action="menu.php">
        <div class="row">
          <div class="col-sm-1">
            <input type="submit" value="⟵" class="btn btn-info btn-lg"/>
          </div>
          <div class="col-sm-10" align="center">
            <h3>Consulte sus Ventas</h3>
            <hr>
          </div>
          <div class="col-sm-1"></div>
        </div>
      </form>
      <!-- Inicio Formulario -->
      <form id="form1" name="form1" method="post" action="mostrarventas2.php">

        <div class="row"> <!-- Fila 1 -->
          <div class="col-sm-1"></div>
          <div class="col-sm-4">
            <label>Fecha Inicial</label>
            <input name="fecha1" type="date" class="form-control" id="fecha1" required>
          </div>
					<div class="col-sm-1"></div>
          <div class="col-sm-4 col-sm-offset-1">
            <label>Fecha Final</label>
            <input name="fecha2" type="date" class="form-control" id="fecha2" required>
          </div>
          <div class="col-sm-1"></div>
        </div>
				<br>
        <div class="row margenTop">
          <div class="col-sm-12 text-center">
            <input type="submit" value="Buscar" class="btn btn-info btn-lg"/>
          </div>
        </div>
        <br>
      </form>
    </div>
  </main>
</html>
<?php } ?>
