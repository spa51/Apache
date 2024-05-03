<?php
$codigo=$_POST['codigo'];

include_once("clase.php");
$objeto=new Busqueda;
$libro=$objeto->Libro();
$autor=$objeto->Autor();
$lv=$objeto->LibroAutor();

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
  <td><div align="center"><span class="estilo1">ID</span></div></td>
  <td><div align="center"><span class="estilo1">Nombre</span></div></td>
  <td><div align="center"><span class="estilo1">Fecha</span></div></td>
  </tr>
  <?php $max=sizeof($libro);
        $max2=sizeof($autor);
        $max3=sizeof($lv);
        $i=0;while($i<$max){
          if($codigo==$libro[$i][0]){
?>
  <tr>
    <td width="89"><?php echo  $libro[$i][0];?></td>
    <td width="149"><?php echo $libro[$i][1];?></td>
    <td width="149"><?php echo $libro[$i][2];?></td>
  </tr>
  <?php }$i=$i+1;} ?>
  <tr>
  <td><div align="center"><span class="estilo1">Autores</span></div></td>
    </tr>
<?php $i=0;while($i<$max3) {
  if ($codigo==$lv[$i][0]) {
    $j=0;while($j<$max3){
    if ($lv[$i][1]==$autor[$j][0]) {
      ?>
      <tr>
        <td width="89"><?php echo  $autor[$j][1];?></td>
        </tr>
  <?php  }$j=$j+1;  }  }$i=$i+1; } ?>
</table>

  <div align="center">
    <input type="submit" name="Submit" value="Regresar" />
  </div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>
