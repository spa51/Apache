<?php
  include_once("Cservicios.php");
  
  if (isset($_POST['id_producto'])) {
    $id = $_POST['id_producto'];
    $conexion = $objeto->connectDB();
    $objconsulta = new Producto;
    $result = $objconsulta->buscar($id, $conexion);
  }
  if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $conexion = $objeto->connectDB();
    $objconsulta = new Producto;
    $result2 = $objconsulta->eliminar($id, $conexion);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>HD13COCINA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/estilos.css" />
  </head>
  <body class="overflow-hidden">
    <div class="container-fluid base">
      <div class="fondo">
        <div class="barra">
          <a href="index.html">
            <img class="img1" src="img/image.png" alt="" />
          </a>
        </div>
        <!-- Inicio -->
        <div class="cuadro">
          <form action="eliminar_producto.php" method="post">
            <h2>Eliminar Producto</h2>
            <div class="minicuadro">
              <div class="input-group input-group-sm mb-1">
                <h3 class="blanco">ID:</h3>
                <input style="border-radius: 10px;" class="form-control mx-1" type="text" name="id_producto" />
                <button type="submit" class="save">Cargar</button>
              </div>
            </div>
          </form>
          <?php if (isset($result) && $row = mysqli_fetch_array($result)) { ?>
            <form action="eliminar_producto.php" method="post">
              <div class="ncaja">
                <div class="rectangulomodi">
                  <div class="input-group input-group-sm mb-1">
                    <h3 class="blanco">Nombre:</h3>
                    <input style="border-radius: 10px;" class="form-control mx-1" type="text" value="<?php echo $row['Nombre'] ?>" readonly />
                    <h3 class="blanco">Precio:</h3>
                    <input style="border-radius: 10px;" class="form-control mx-1" type="text" value="<?php echo $row['Precio'] ?>" readonly />
                  </div>
                  <div class="input-group input-group-sm">
                    <h3 class="blanco">Detalles: </h3>
                    <textarea class="form-control mx-1" style="border-radius: 10px;" readonly><?php echo $row['Detalles'] ?></textarea>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $row['id_producto'] ?>" />
                </div>
              </div>
              <button type="submit" class="save btsave">Eliminar</button>
            </form>
          <?php 
         } ?>
        </div>
        <!-- Inicio2222 -->
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html> 