<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/estilos1.css">
  <title>Formulario</title>
</head>
<body class="fondo">
  <header> <!-- Inicio barra de navegación -->
    <div class="container fondoMain">
      <nav class="menu">
				<b><a href="nuevo_cliente.php">Registrarse</a></b>
				<b><a href="nuevo_usuario2.php">Crear Usuario</a></b>
			</nav>
    </div>
  </header> <!-- Fin barra de navegación -->
  <main>
    <div class="fondo">

      <!-- Título del Formulario -->
      <div class="row">
        <div class="col-sm-12">
          <b><h1 align="center">Inicie Sesión</h1></b>
          <br>
        </div>
      </div>

      <!-- Inicio Formulario -->
      <form id="form1" name="form1" method="post" action="verifica_usuario.php">

        <div class="row"> <!-- Fila 1 -->
          <div class="col-sm-4"></div>
          <div class="col-sm-4"> <!-- Input nombre -->
            <label for="nombre">Usuario</label>
            <input name="txt_usuario" type="text" class="form-control" id="txt_usuario">
          </div>
          <div class="col-sm-4"></div>
        </div> <!-- Fila 1 -->
        <br>
        <div class="row"> <!-- Fila 2 -->
          <div class="col-sm-4"></div>
          <div class="col-sm-4"> <!-- Input Contraseña -->
            <label for="nombre">Contraseña</label>
            <input name="txt_password" type="password" class="form-control" id="txt_password">
          </div>
          <div class="col-sm-4"></div>
        </div>
        <br>
        <div class="row margenTop"> <!-- Fila 6 -->
          <div class="col-sm-12 text-center"> <!-- Boton enviar -->
            <button type="submit" class="btn btn-info btn-lg">Iniciar</button>
          </div>
        </div>
      </form>
      <!-- Fin formulario -->
    </div>
  </main>
</body>
</html>
