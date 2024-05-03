<?php
$idcliente=$_POST['idcliente'];
include_once("Cservicios.php");
$conexion=$objeto->connectDB();

$objconsulta=new Producto;
$result=$objconsulta->buscar_cliente($idcliente,$conexion);
$result1=$objconsulta->buscar_venta($idcliente,$conexion);
$result2=$objconsulta->buscar_venta($idcliente,$conexion);
$result3=$objconsulta->buscar_venta($idcliente,$conexion);
$result4=$objconsulta->consulta_factura($idcliente,$conexion);
$ult=$objconsulta->ultimo_cliente($idcliente,$conexion);
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
<br><br>
<div class="container">
  <body class="fondo">
    <h3 align="center">Cliente</h3>
    <div class="row" align="center">
      <table width="400" border="1" align="center">
        <thead>
          <tr>
            <th>ID Cliente</th>
            <th>Nombre</th>
          </tr>
        </thead>
        <tbody>
        <?php while($row=mysqli_fetch_array($result)){ ?>
          <tr>
            <td width="20" align="center"><?php echo $row['idcliente'] ?></td>
            <td width="80"><?php echo $row['nombre'] ?></td>
          </tr>
        </tbody>
      <?php } ?>
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
      <?php while($row=mysqli_fetch_array($result1)){ ?>
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
          <th>Nro Factura</th>
          <th>ID Producto</th>
          <th>Producto</th>
          <th>Unidades</th>
          <th>Precio</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
      <?php
          $ultimo=mysqli_fetch_array($ult);
          while($row1=mysqli_fetch_array($result3)){
            while($row=mysqli_fetch_array($result4)){
              if($row1['idfactura']==$row['idfactura']){
                $total=$row['unidades']*$row['precio'];
                $cont+=$total;
                ?>
                <tr>
                  <td width="40" align="center"><?php echo $row['idfactura'] ?></td>
                  <td width="40" align="center"><?php echo $row['idproducto'] ?></td>
                  <td width="40" align="center"><?php echo $row['producto'] ?></td>
                  <td width="80" align="center"><?php echo $row['unidades'] ?></td>
                  <td width="80" align="center"><?php echo number_format($row['precio'],2,'.',',') ?></td>
                  <td width="80" align="center"><?php echo number_format($total,2,'.',',') ?></td>
                </tr>
                <?php
              }
                if($row1['idfactura']!=$row['idfactura'] || $row['consecutivo']==$ultimo['ultimo']) {
                  ?>
                  <tr>
                    <td width="60" align="center" ><?php echo "" ?></td>
                    <td width="80" align="center"><?php echo "" ?></td>
                    <td width="89" align="center"><?php echo "" ?></td>
                    <td width="89" align="center"><?php echo "" ?></td>
                    <b><td width="89"><?php echo "Subtotal:" ?></td></b>
                    <td width="89"><?php echo number_format($cont,2,',','.') ?></td>
                  </tr>
                  <?php
                  $cont=0;
                }
              }
            }
    ?>
    </table>
  </div>
  <br>
    <form action="index.php" method="post">
      <div class="row margenTop">
        <div class="col-sm-12 text-center">
          <input type="submit" value="Regresar" class="btn btn-info btn-lg" />
        </div>
      </div>
    </form>
    <br>
  </body>
</div>

<?php /*
<body>
<form id="form1" name="form1" method="post" action="index.php">
  <p align="center">CLIENTE</p>
  <table width="405" border="1" align="center" bordercolor="#CCCCCC">
  <tr>
    <td><div align="center"><span class="Estilo1">ID Cliente</span></div></td>
    <td><div align="center"><span class="Estilo1">Nombre</span></div></td>
  </tr>
    <?php
    $max=sizeof($clientes);
    $i=0; while($i<$max){
      if($codigo==$clientes[$i][0]){
    ?>
    <tr>
    <td width="50" align="center"><?php echo $clientes[$i][0] ?></td>
    <td width="89"><?php echo $clientes[$i][1] ?></td>
  </tr>
  <?php
      }
      $i++; } ?>
</table>
<form id="form1" name="form1" method="post" action="index.php">
  <p align="center">FACTURA</p>
  <table width="1000" border="1" align="center" bordercolor="#CCCCCC">
    <tr>
      <td><div align="center"><span class="Estilo1">Facturas</span></div></td>
      <td><div align="center"><span class="Estilo1">Fechas</span></div></td>
      <td><div align="center"><span class="Estilo1">Código Producto</span></div></td>
      <td><div align="center"><span class="Estilo1">Producto</span></div></td>
      <td><div align="center"><span class="Estilo1">Unidades</span></div></td>
      <td><div align="center"><span class="Estilo1">Precio</span></div></td>
      <td><div align="center"><span class="Estilo1">Subtotal</span></div></td>
    </tr>
      <?php
    $max2=sizeof($ventas);
    $max3=sizeof($valor);
    $max4=sizeof($productos);
    $i=0; while($i<$max2){
      if($codigo==$ventas[$i][1]){
      $j=0; while($j<$max3){
        if($ventas[$i][0]==$valor[$j][0]){
        $k=0;
        while($k<$max4){
          if($valor[$j][1]==$productos[$k][0]){
            $total=$valor[$j][2]*$productos[$k][2];
            $cont=$cont+$total; ?>
            <tr>
            <td width="60" align="center"><?php echo $ventas[$i][0] ?></td>
            <td width="80" align="center"><?php echo $ventas[$i][2] ?></td>
            <td width="89" align="center"><?php echo $valor[$j][1] ?></td>
            <td width="89"><?php echo $productos[$k][1] ?></td>
            <td width="60" align="center"><?php echo $valor[$j][2] ?></td>
            <td width="89"><?php echo number_format($productos[$k][2],2,'.',',') ?></td>
            <td width="89"><?php echo number_format($total,2,'.',',') ?></td>
            </tr>
        <?php
          }
          $k++;
        }
        }
        $j++; }
        ?>
        <tr>
        <td width="60" align="center"><?php echo "" ?></td>
        <td width="80" align="center"><?php echo "" ?></td>
        <td width="89" align="center"><?php echo "" ?></td>
        <td width="89" align="center"><?php echo "" ?></td>
        <td width="60" align="center"><?php echo "" ?></td>
        <td width="89"><?php echo "Total:" ?></td>
        <td width="89"><?php echo number_format($cont,2,',','.') ?></td>
        </tr>
        <?
      }
      $i++;
      } ?>
</table>

  <label>
  <div align="center">
    <input type="submit" name="Submit" value="Regresar" />
  </div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>
*/?>
