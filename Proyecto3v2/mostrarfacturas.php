<?php
$idcliente=$_POST['idcliente'];
include_once("Cservicios.php");
$conexion=$objeto->connectDB();

$objconsulta=new Producto;
$vent=$objconsulta->consulta_factura($idcliente,$conexion);
$vent1=$objconsulta->consulta_factura($idcliente,$conexion);
$vent2=$objconsulta->consulta_factura($idcliente,$conexion);

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
  <title>Mostrar</title>
</head>
<body>
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
</body>
<div class="container">
  <body class="fondo">
    <h3 align="center">Cliente</h3>
    <div class="row" align="center">
      <table width="400" border="1" align="center">
        <thead>
          <tr>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Celular</th>
          </tr>
        </thead>
        <tbody>
        <?php $row=mysqli_fetch_array($vent) ?>
          <tr>
            <td width="20" align="center"><?php echo $row['idcliente'] ?></td>
            <td width="80"><?php echo $row['nombres'] ?></td>
            <td width="80" align="center"><?php echo $row['celular'] ?></td>
          </tr>
        </tbody>
        <?php  ?>
      </table>
    <h3 align="center">Factura</h3>
    <table width="250" border="1" align="center">
      <thead>
        <tr>
          <th width="100">Nro Factura</th>
          <th width="100">Fecha</th>
        </tr>
      </thead>
      <tbody>
      <?php while($row=mysqli_fetch_array($vent1)){ ?>
        <tr>
          <td width="20" align="center"><?php echo $row['idfactura'] ?></td>
          <td width="40" align="center"><?php echo $row['fecha'] ?></td>
        </tr>
      </tbody>
    <?php } ?>
    </table>
    <h3 align="center">Ventas</h3>
    <table width="700" border="1" align="center">
      <thead>
        <tr>
          <th>Consecutivo</th>
          <th>Nro Factura</th>
          <th>ID Producto</th>
          <th>Producto</th>
          <th>Unidades</th>
        </tr>
      </thead>
      <tbody>
      <?php while($row=mysqli_fetch_array($vent2)){ ?>
        <tr>
          <td width="20" align="center"><?php echo $row['consecutivo'] ?></td>
          <td width="40" align="center"><?php echo $row['idfactura'] ?></td>
          <td width="40" align="center"><?php echo $row['idproducto'] ?></td>
          <td width="40" align="center"><?php echo $row['nombre'] ?></td>
          <td width="80" align="center"><?php echo $row['uni_vendidas'] ?></td>
        </tr>
      </tbody>
    <?php } ?>
    </table>
  </div>
  <br>
    <form action="consultar_factura.php" method="post">
      <div class="row margenTop">
        <div class="col-sm-12 text-center">
          <input type="submit" value="Regresar" class="btn btn-info btn-lg" />
        </div>
      </div>
    </form>
    <br>
  </body>
</div>
</html>
<?php } ?>
