<?php
$codigo=$_POST['codigo'];

include_once("clase.php");
$objeto=new Busqueda;
$libro=$objeto->Libro();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta charset="utf-8">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {color: #FF0000}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="index.php">
  <p align="center">INFORMACION GENERAL </p>
  <table width="905" border="1" align="center" bordercolor="#CCCCCC">
  <tr>
  <td><div align="center"><span class="estilo1">Total Escaleras ES-001</span></div></td>
  <td><div align="center"><span class="estilo1">Total Escaleras ES-002</span></div></td>
  <td><div align="center"><span class="estilo1">Total Precio Escaleras ES-001</span></div></td>
  <td><div align="center"><span class="estilo1">Total Precio Escaleras ES-002</span></div></td>
  </tr>
  <?php $max=sizeof($libro);
        $i=0;while($i<$max){
            $suma=$suma+$libro[$i][3];
            $suma2=$suma2+$libro[$i][4];
            $suma3=$suma3+$libro[$i][5];
            $suma4=$suma4+$libro[$i][6];
?>
<?php $i=$i+1;} ?>
  <tr>
    <td width="89"><?php echo  $suma;?></td>
    <td width="149"><?php echo $suma2;?></td>
    <td width="149"><?php echo $suma3*$suma;?></td>
    <td width="149"><?php echo $suma4*$suma2;?></td>
  </tr>

  <tr>
  <td><div align="center"><span class="estilo1">Id</span></div></td>
  <td><div align="center"><span class="estilo1">Vendedor</span></div></td>
    </tr>
    <?php $max2=sizeof($libro);
    if ($codigo==$libro[$i][0]) {
      // code...

          $i=0;while($i<$max2){
              $suma6=$suma6+$libro[$i][3];
              $suma5=$suma5+$libro[$i][4];
              $suma7=$suma7+$libro[$i][5];
              $suma8=$suma8+$libro[$i][6];

                ?>
  <?php $i=$i+1;}$total=$suma6*$suma7+$suma5*$suma8; ?>
    <tr>
      <td width="89"><?php echo  $libro[$i][0];?></td>
      <td width="149"><?php echo $total;?></td>
      <?php } ?>
</table>

  <div align="center">
    <input type="submit" name="Submit" value="Regresar" />
  </div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>
