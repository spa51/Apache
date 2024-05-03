<?php
$idproducto=$_POST['idproducto'];
include_once("Cservicios.php");
$conexion=$objeto->connectDB();

$objconsulta=new Producto;
$result=$objconsulta->consultar_prod($idproducto,$conexion);

$row=mysqli_fetch_array($result);

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

<div class="container">
  <h3 align="center">INFORMACIÓN</h3>
  <hr>
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <form id="form1" name="form1" method="post" action="recibe_datos.php">
        <table width="347" border="1" align="center">
        <tr>
          <td width="100"><b>ID Producto</b></td>
          <td width="242"><?php echo $row['idproducto'] ?></td>
        </tr>
        <tr>
          <td> <b>Nombre</b> </td>
          <td><?php echo $row['nombre'] ?></td>
        </tr>
        <tr>
          <td> <b>Unidades</b> </td>
          <td><?php echo $row['unidades'] ?></td>
        </tr>
        <tr>
          <td> <b>Precio</b> </td>
          <td><?php echo $row['precio'] ?></td>
        </tr>
      </table>
      </form>
    </div>
    <div class="col-sm-4"></div>
  </div>
  <br>

  <form action="ingresar_producto.php" method="post">
    <div class="row margenTop">
      <div class="col-sm-12 text-center">
        <input type="submit" value="Regresar" class="btn btn-info btn-lg" />
      </div>
    </div>
  </form>
  <br>
</div>
</body>
</html>
<?php } ?>
