<?php
$A=$_POST['nota1'];

$B = $_POST['nota2'];

$C = $_POST['nota3'];

include_once("clase.php");

$objeto=new Principal;

$definiti=$objeto->definitiva($A,$B,$C);
$definiti2=$objeto->definitiva2($A,$B,$C);

?>
<p align="center">RESULTADOS</p>
<table width="264" border="1" align="center">
  <tr>
    <td>A</td>
    <td><?php echo $A ?></td>
  </tr>
  <tr>
    <td>B</td>
    <td><?php echo $B ?></td>
  </tr>
  <tr>
    <td>C</td>
    <td><?php echo $C ?></td>
  </tr>
  <tr>
    <td>x1</td>
    <td><?php echo $definiti ?></td>
  </tr>
  <tr>
    <td>x2</td>
    <td><?php echo $definiti2 ?></td>
  </tr>


</table>
<p align="center"><a href="index.php">REGRESAR</a></p>
