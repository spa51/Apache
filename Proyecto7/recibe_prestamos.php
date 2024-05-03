<?php
$consecutivo=$_POST['consecutivo'];
$idlibro=$_POST['idlibro'];
$idlector=$_POST['idlector'];
$fechaPrestamo=$_POST['fechaPrestamo'];
$fechaMaxDev=$_POST['fechaMaxDev'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result2=$objconsulta->cantidad_libros($idlector,$conexion);
$row=mysqli_fetch_array($result2);
if ($row['libros']>=3) {
  ?>
  <html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,user-scalable=no">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/estilos1.css" media="screen">
      <link rel="stylesheet" href="css/estilos2.css" media="screen">
  </head>
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
    <body>
      <div class="container">
        <div class="row" align="center">
          <div class="col-sm-3 col-xs-1"></div>
          <div class="col-sm-6 col-xs-10">
            <br><br>
            <p>El lector que desea rentar el libro ya cuenta con 3 libros en prestamo, por lo tanto no podrá rentar más.</p>
          </div>
        </div>
        <div class="row margenTop"> <!-- Fila 6 -->
          <div class="col-sm-12 text-center"> <!-- Boton enviar -->
            <a href="nuevo_prestamo.php"><button type="button">Regresar</button></a>
          </div>
        </div>
      </div>
    </body>
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
  <?php
}
else {
  $result=$objconsulta->ingresar_prestamo($consecutivo,$idlibro,$idlector,$fechaPrestamo,$fechaMaxDev,$conexion);
}
?>
