<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/estilos1.css">
  <title>Mostrar</title>
</head>

<body class="fondo">
  <header> <!-- Inicio barra de navegación -->
    <div class="container fondoMain">
      <div class="btn-menu">
        <label for="btn-menu" class="icon-menu">☰ Menú</label>
      </div>
    <nav class="menu">
      <b><a href="#">Cerrar Sesión</a></b>
      <b><a href="#"><?php echo 'Hola, Jhojan' ?></a></b>
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
          </div>
          <div class="col-sm-10" align="center">
            <h3>Consulte sus Datos</h3>
          </div>
          <div class="col-sm-1"></div>
        </div>
      </form>
			<hr>
      <!-- Inicio Formulario -->
      <form id="form1" name="form1" method="post" action="mostrartodos.php">
        <div class="row"> <!-- Fila 1 -->
          <div class="col-sm-4"></div>
          <div class="col-sm-4"> <!-- Input nombre -->
            <label for="nombre">ID Cliente</label>
            <input name="idcliente" type="text" class="form-control" id="idcliente" required>
          </div>
          <div class="col-sm-4"></div>
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
</body>
