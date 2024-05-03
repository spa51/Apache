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
      <nav class="menu">
				<b><a href="index.php">Salir</a></b>
			</nav>
    </div>
  </header> <!-- Fin barra de navegación -->
  <main>
    <br>
    <div class="container">
        <div class="row">
          <div class="col-sm-12" align="center">
            <h3>Registrar Usuario</h3>
            <hr>
          </div>
        </div>
      <!-- Inicio Formulario -->
      <form id="form1" name="form1" method="post" action="recibe_datos5.php">

        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-2">
            <label>ID Cliente</label>
            <input type="text" class="form-control" name="idcliente">
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-4">
            <label>Usuario</label>
            <input type="text" class="form-control" name="tusuario" required>
          </div>
          <div class="col-sm-4 col-sm-offset-1">
            <label>Password</label>
            <input type="password" class="form-control" name="tpassword" required>
          </div>
        </div>
        <br>

        <div class="row margenTop"> <!-- Fila 6 -->
          <div class="col-sm-12 text-center"> <!-- Boton enviar -->
            <button type="submit" class="btn btn-primary btn-lg">Aceptar</button>
          </div>
        </div>
        <br>
      </form>
    </div>
  </main>
</html>
