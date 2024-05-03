<?php
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];

$p35=$_POST['nota1'];

$s35 = $_POST['nota2'];

$t30 = $_POST['nota3'];
include_once("La_clase.php");

$objeto=new Principal;

$definiti=$objeto->definitiva($p35,$s35,$t30);

?>
<p align="center">RESULTADOS DEL SEMESTRE </p>
<table width="264" border="1" align="center">
  <tr>
    <td>Codigo</td>
    <td><?php echo $codigo ?></td>
  </tr>
  <tr>
    <td width="93">Nombre</td>
    <td width="91"><?php echo $nombre ?></td>
  </tr>
  <tr>
    <td>Definitiva</td>
    <td><?php echo $definiti ?></td>
  </tr>
</table>
<p align="center"><a href="index.php">REGRESAR</a></p>
