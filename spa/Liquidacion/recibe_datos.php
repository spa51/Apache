<?php
$salario=$_POST['salario'];
$dias=$_POST['dias'];
$diassem=$_POST['diassem'];

include_once("Clase_Subclase.php");
$objeto=new Liquidación();

$def=$objeto->Cesantias($salario,$dias);
$def2=$objeto->Interes_Cesantias($def,$dias);
$def3=$objeto->Vacaciones($salario,$dias);
$def4=$objeto->Prima($salario,$diassem);
?>
<p align="center">LIQUIDACION</p>
<table width="264" border="1" align="center">
  <tr>
    <td>Salario Mensual</td>
    <td><?php echo $salario ?></td>
    </tr>
    <tr>
    <td>Dias Trabajados</td>
    <td><?php echo $dias ?></td>
    </tr>
    <tr>
    <td>Dias Trabajados en el Semestre</td>
    <td><?php echo $diassem ?></td>
    </tr>
    <tr>
    <td>Cesantias</td>
    <td><?php echo $def ?></td>
    </tr>
    <tr>
    <td>Intereses de Cesantias</td>
    <td><?php echo $def2 ?></td>
    </tr>
    <tr>
    <td>Vacaciones</td>
    <td><?php echo $def3 ?></td>
    </tr>
    <tr>
    <td>Prima de Servicios</td>
    <td><?php echo $def4 ?></td>
    </tr>
    <tr>
</table>
<p align="center"><a href="index.php">Volver</a></p>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
</body>
</html>
