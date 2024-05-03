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
  <title>Nueva Venta</title>
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
            <h3>Registrar Venta</h3>
            <hr>
          </div>
          <div class="col-sm-1"></div>
        </div>
      </form>

      <!-- Inicio Formulario -->
      <form id="form1" name="form1" method="post" action="recibe_datos2.php">

        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-3">
            <label>ID Factura</label>
            <input name="idfactura" type="text" class="form-control" required>
          </div>
          <div class="col-sm-2">
            <label>ID Producto</label>
            <input name="idproducto" type="text" class="form-control" required>
          </div>
          <div class="col-sm-3">
            <label>Unidades Vendidas</label>
            <input name="uni_vendidas" type="text" class="form-control" required>
          </div>
          <div class="col-sm-1"></div>
        </div> <!-- Fila 1 -->
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
