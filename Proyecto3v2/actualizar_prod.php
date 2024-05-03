<?php
$idproducto=$_POST['idproducto'];
include_once("Cservicios.php");
$conexion=$objeto->connectDB();

$objconsulta=new Producto;
$result=$objconsulta->consultar_prod($idproducto,$conexion);

if(empty($result)){
  echo "No hay datos";
}

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
  <title>Actualizar</title>
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
      <form id="form1" name="form1" method="post" action="ingresar_producto2.php">
        <div class="row">
          <div class="col-sm-1">
            <input type="submit" value="⟵" class="btn btn-info btn-lg"/>
          </div>
          <div class="col-sm-10" align="center">
            <h3>Actualice sus Datos</h3>
            <hr>
          </div>
          <div class="col-sm-1"></div>
        </div>
      </form>

      <!-- Inicio Formulario -->
      <form id="form1" name="form1" method="post" action="recibe_datos3.php">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-4">
            <label>ID Producto</label>
            <input type="text" class="form-control" name="idproducto" value="<?=$row['idproducto']?>" readonly="false" required>
          </div>
          <div class="col-sm-4 col-sm-offset-1">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?=$row['nombre']?>" required>
          </div>
        </div>
        <br>
        <div class="row"> <!-- Fila 1 -->
          <div class="col-sm-1"></div>
          <div class="col-sm-4">
            <label>Unidades</label>
            <input type="text" class="form-control" name="unidades" value="<?=$row['unidades']?>" required>
          </div>
          <div class="col-sm-4 col-sm-offset-1">
            <label>Precio</label>
            <input type="text" class="form-control" name="precio" value="<?=$row['precio']?>" required>
          </div>
        </div>
        <br>
        <div class="row margenTop">
          <div class="col-sm-12 text-center">
            <input type="submit" value="Actualizar" class="btn btn-info btn-lg"/>
          </div>
        </div>
        <br>
      </form>
    </div>
  </main>
</html>
<?php } ?>
