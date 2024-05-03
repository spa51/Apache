<?php
$consecutivo=$_POST['consecutivo'];
$idlibro=$_POST['idlibro'];
$idlector=$_POST['idlector'];
$fechaDev=$_POST['fechaDev'];

include_once("Cservicios.php");
$conexion=$objeto->connectDB();
$objconsulta=new Producto;
$result=$objconsulta->ingresar_devolucion($consecutivo,$idlibro,$idlector,$fechaDev,$conexion);
$f=$objconsulta->calcular_multa($consecutivo,$idlector,$idlibro,$conexion);
$row=mysqli_fetch_array($f);

if ($row['dias']>0) {
  ?>
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos1.css">
    <link rel="stylesheet" href="css/estilos2.css">
  </head>
  <body>
    <br><br>
    <div class="row" align="center">
      <div class="col-sm-3 col-xs-1"></div>
      <div class="col-sm-6 col-xs-10">
        <p>Debido a que este libro fue devuelto luego del tiempo estipulado se le aplicará una multa por cada dia que duró sin devolverse</p>
      </div>
    </div>
    <form id="form1" name="form1" method="post" action="nuevo_multa.php">
      <div class="row hide">
        <div class="col-sm-1"></div>
        <div class="col-sm-4 col-xs-6">
          <label>Consecutivo</label>
          <input type="text" class="form-control" name="consecutivo" value="<?=$consecutivo?>">
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-4 col-xs-6">
          <label>ID Lector</label>
          <input type="text" class="form-control" name="idlector" value="<?=$idlector?>">
        </div>
      </div>

      <div class="row hide">
        <div class="col-sm-4 col-sm-offset-1">
          <label>Libro</label>
          <input type="text" class="form-control" name="idlibro" value="<?=$idlibro?>">
        </div>
        <br>
        <div class="col-sm-4 col-sm-offset-1">
          <label>Fecha Devolución</label>
          <input type="date" class="form-control" name="fechaDev" value="<?=$fecha_actual?>">
        </div>
      </div>
      <br>
      <div class="row margenTop"> <!-- Fila 6 -->
        <div class="col-sm-12 text-center"> <!-- Boton enviar -->
          <button type="submit">Multar</button>
        </div>
      </div>
    </form>
  </body>
  </html>
  <?php
}
?>
