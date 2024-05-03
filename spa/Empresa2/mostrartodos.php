<?

include_once("classe.php");
$objeto=new empresa;
$trabajador=$objeto->trabajadores();
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
  <td><div align="center"><span class="estilo1">Nombre del trabajador</span></div></td>
  <td><div align="center"><span class="estilo1">horas trabajadas</span></div></td>
  <td><div align="center"><span class="estilo1">valor por hora</span></div></td>
  <td><div align="center"><span class="estilo1">bonificacion</span></div></td>
  <td><div align="center"><span class="estilo1">total</span></div></td>
  </tr>
  <?php $max=sizeof($trabajador);
    $i=0;while($i<$max){
    $trabajador[$i][2]=($trabajador[$i][1]*$hora)+$bono;
      $i=$i+1;
      }
      ?>

  <?php $i=0;while($i<$max){?>
  <tr>
    <td width="89"><?php echo  $trabajador[$i][0];?></td>
    <td width="149"><?php echo $trabajador[$i][1];?></td>
    <td width="149"><?php echo $hora;?></td>
    <td width="149"><?php echo $bono?></td>
    <td width="149"><?php echo $trabajador[$i][2];?></td>
  </tr>
  <?php $i=$i+1;?>
  <?php } ?>
</table>

  <label>
  <div align="center">
    <input type="submit" name="Submit" value="Regresar" />
  </div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>
