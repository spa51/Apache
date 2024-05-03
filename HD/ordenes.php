<?php
include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$vent = $objconsulta->ordenes($id,$conexion);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HD13COCINA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body class="overflow-hidden">
    <div class=" container-fluid base">
        <div class="fondo">
            <div class="barra">              
              <a href="index.html">
              <img class="img1" src="img/image.png" alt="">
            </a>
            </div>
            <div class="cuadro">
              <h2>ORDENES</h2>
              <div class="lineacaja">
                <div class="rectangulo2">
                <?php while($row=mysqli_fetch_array($vent)){ ?>
                  <div class="item2">
                    <p class="pf factura1 ">ID: <?php echo $row['id_factura'] ?></p>
                    <p class="pf factura2">Fecha: <?php echo $row['fecha'] ?></p>
                    <div style="clear: both;"></div>
                    <div><p class="pf factura3">Total Pagado: $ <?php echo $row['total'] ?></p></div>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>