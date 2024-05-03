<?php
$idcliente=$_POST['idcliente'];
include_once("Cservicios.php");
$conexion=$objeto->connectDB();

$objconsulta=new Producto;
$vent=$objconsulta->buscar_cliente($idcliente,$conexion);
$vent1=$objconsulta->consultar_pagos($idcliente,$conexion);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/estilos1.css" media="screen">
  <title>Mostrar</title>
</head>
<body>
  <header> <!-- Inicio barra de navegación -->
    <div class="container fondoMain">
      <div class="col-sm-2">
        <div class="btn-menu">
          <label for="btn-menu" class="icon-menu">☰ Menú</label>
        </div>
      </div>
      <div class="col-sm-8"></div>
      <div class="col-sm-2">
        <nav class="menu">
          <b><a href="index.php">Inicio</a></b>
        </nav>
      </div>
		</div>
  </header> <!-- Fin barra de navegación -->
	<br>
</body>

<div class="container">
  <body class="fondo">
    <h3 align="center">Cliente</h3>
    <div class="row" align="center">
      <table width="250" border="1" align="center">
        <thead>
          <tr>
            <th>ID Cliente</th>
            <th>Nombre</th>
          </tr>
        </thead>
        <tbody>
        <?php $row=mysqli_fetch_array($vent) ?>
          <tr>
            <td width="20" align="center"><?php echo $row['idcliente'] ?></td>
            <td width="80"><?php echo $row['nombres'] ?></td>
          </tr>
        </tbody>
        <?php  ?>
      </table>
    <h3 align="center">Historial</h3>
    <table width="500" border="1" align="center">
      <thead>
        <tr>
          <th>ID Equipo</th>
          <th>Mantenimiento</th>
          <th>Costo</th>
        </tr>
      </thead>
      <tbody>
      <?php
      while($row=mysqli_fetch_array($vent1)){
        $cont+=$row['costo'];
        ?>
        <tr>
          <td width="20" align="center"><?php echo $row['idequipo'] ?></td>
          <td width="40" align="center"><?php echo $row['descripcion'] ?></td>
          <td width="40" align="center"><?php echo number_format($row['costo'],2,',','.') ?></td>
        </tr>
      <?php } ?>
      <tr>
        <td><?php echo "" ?></td>
        <td><b><?php echo "Subtotal:" ?></b></td>
        <td><?php echo number_format($cont,2,',','.') ?></td>
      </tr>
      </tbody>
    </table>
  </div>
  <br>
    <form action="consulta3.php" method="post">
      <div class="row margenTop">
        <div class="col-sm-12 text-center">
          <input type="submit" value="Regresar" class="btn btn-info btn-lg" />
        </div>
      </div>
    </form>
    <br>
  </body>
</div>
<input type="checkbox" id="btn-menu">
<div class="container-menu">
  <div class="cont-menu">
    <nav>
      <h4>&nbsp;&nbsp;Ingresar</h4>
      <a href="nuevo_cliente.php">Cliente</a>
      <a href="nuevo_equipo.php">Equipo</a>
      <a href="nuevo_mantenimiento.php">Historial de Mantenimiento</a>
      <a href="nuevo_tipomant.php">Tipo de Mantenimiento</a>
      <br>
      <h4>&nbsp;&nbsp;Ver</h4>
      <a href="consulta1.php">Equipos</a>
      <a href="consulta2.php">Mantenimiento de Equipos</a>
      <a href="#">Pagos</a>
    </nav>
    <label for="btn-menu">✖️</label>
  </div>
</div>
</html>
