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
  <title>Registrar</title>
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
            <h3>Registrar Datos</h3>
          </div>
          <div class="col-sm-1"></div>
        </div>
      </form>
<hr>
      <!-- Inicio Formulario -->
      <form id="form1" name="form1" method="post" action="recibe_datos.php">

        <div class="row"> <!-- Fila 1 -->
          <div class="col-sm-4"></div>
          <div class="col-sm-4"> <!-- Input nombre -->
            <label for="nombre">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="nombre" required>
          </div>
          <div class="col-sm-4"></div>
        </div> <!-- Fila 1 -->
				<br>
        <div class="row"> <!-- Fila 2 -->
          <div class="col-sm-4"></div>
          <div class="col-sm-4"> <!-- Input Contraseña -->
            <label>Unidades</label>
            <input name="unidades" type="text" class="form-control" id="unidades" required>
          </div>
          <div class="col-sm-4"></div>
        </div>
				<br>
        <div class="row"> <!-- Fila 1 -->
          <div class="col-sm-4"></div>
          <div class="col-sm-4"> <!-- Input nombre -->
            <label>Precio</label>
            <input name="precio" type="text" class="form-control" id="precio" required>
          </div>
          <div class="col-sm-4"></div>
        </div>
				<br>
        <div class="row margenTop"> <!-- Fila 6 -->
          <div class="col-sm-12 text-center"> <!-- Boton enviar -->
            <button type="submit" class="btn btn-info btn-lg">Guardar</button>
          </div>
        </div>
        <br>
      </form>
    </div>
  </main>
</html>
<?php } ?>
