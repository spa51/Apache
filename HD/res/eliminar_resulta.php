<?php
$id=$_POST['id_producto'];
include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta-> buscar($id,$conexion);
$result2=$objconsulta->eliminar($id, $conexion);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>HD13COCINA</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
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
          <h2>Eliminar Producto</h2>
        <!-- Inicio2222 -->
        <form action="eliminar_producto.php" method="post">
          <div class="ncaja">
            <div class="rectangulomodi">
              <div class="input-group input-group-sm mb-1">
              <?php while($row=mysqli_fetch_array($result)){ ?>
                <h3 class="blanco">Nombre:</h3>
                <input style="border-radius: 10px;" class="form-control mx-1  " type="text" value="<?php echo $row['Nombre'] ?>" />
                <h3 class="blanco">Precio:</h3>
                <input style="border-radius: 10px;" class="form-control mx-1" type="text" value="<?php echo $row['Precio'] ?>" />
              </div>
              <div class="input-group input-group-sm">
                <h3 class="blanco">Detalles: </h3>
                <textarea class="form-control mx-1" style="border-radius: 10px;"  value="<?php echo $row['Detalles'] ?>"></textarea>
              </div>
              <?php } ?>
            </div>
          </div>
          <button type="submit" class="save btsave">Eliminar <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
          </svg></button>
        </form>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
