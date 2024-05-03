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
	  <title>Menú</title>
	</head>

	<body class="fondo">
	  <header> <!-- Inicio barra de navegación -->
			<div class="container fondoMain">
				<div class="col-sm-2">
					<div class="btn-menu">
						<label for="btn-menu" class="icon-menu">☰ Menú</label>
					</div>
				</div>
				<div class="col-sm-6"></div>
				<div class="col-sm-4">
					<nav class="menu">
						<b><a href="logout.php">Cerrar Sesión</a></b>
						<b><a href="#"><?php echo 'Hola, '; echo $_SESSION['k_nombres']; ?></a></b>
					</nav>
				</div>
			</div>
	  </header> <!-- Fin barra de navegación -->
	  <main>
			<input type="checkbox" id="btn-menu">
			<div class="container-menu">
				<div class="cont-menu">
					<nav>
						<a href="registrardatos.php">Ingresar Productos</a>
						<a href="ingresar_producto.php">Consultar Productos</a>
						<a href="ingresar_producto2.php">Actualizar Productos</a>
						<a href="mostrartodos.php">Mostrar Productos</a>
						<a href="nueva_venta.php">Ingresar Ventas</a>
						<a href="ingresar_producto3.php">Consultar Ventas</a>
						<a href="mostrarventas.php">Mostrar Ventas</a>
						<a href="ingresar_producto4.php">Consultar Ventas x Fecha</a>
						<a href="consultar_factura.php">Consultar Facturas</a>
					</nav>
					<label for="btn-menu">✖️</label>
				</div>
			</div>
		</body>

		<?php
			}
			else
			{
				echo"Acceso no autorizado";
			}
			?>
			<br>
		</div>
