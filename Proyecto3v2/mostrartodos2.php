<?php
$idproducto=$_POST['idproducto'];
include_once("Cservicios.php");
$conexion=$objeto->connectDB();

$objconsulta=new Producto;
$resul=$objconsulta->consultar_ventas($idproducto,$conexion);
$result=$objconsulta->consultar_ventas($idproducto,$conexion);

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
<body class="fondo" align="center">
  <h3 align="center">Informe de Datos de Productos</h3>
  <hr>
  <div class="row">
    <div class="col-sm-12" align="center">
      <table width="400" border="1" align="center">
        <thead>
          <tr>
            <th>ID Producto</th>
            <th>Nombre</th>
            <th>Unidades</th>
          </tr>
        </thead>
        <tbody>
        <?php $row=mysqli_fetch_array($resul) ?>
          <tr>
            <td width="20" align="center"><?php echo $row['idproducto'] ?></td>
            <td width="80"><?php echo $row['nombre'] ?></td>
            <td width="20" align="center"><?php echo $row['unidades'] ?></td>
          </tr>
        </tbody>
        <?php  ?>
      </table>
    <br></br>
    <table width="500" border="1" align="center">
      <thead>
        <tr>
          <th>Consecutivo</th>
          <th>Unidades Vendidas</th>
          <th>Fecha</th>
        </tr>
      </thead>
      <tbody>
      <?php while($row=mysqli_fetch_array($result)){ ?>
        <tr>
          <td width="20" align="center"><?php echo $row['consecutivo'] ?></td>
          <td width="80" align="center"><?php echo $row['uni_vendidas'] ?></td>
          <td width="40" align="center"><?php echo $row['fecha'] ?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
    </div>
  </div>
  <br>
  <form action="ingresar_producto3.php" method="post">
    <div class="row margenTop">
      <div class="col-sm-12 text-center">
        <input type="submit" value="Regresar" class="btn btn-info btn-lg" href="menu.php"/>
      </div>
    </div>
  </form>
  <br>
</body>
</div>
</html>
<?php } ?>
