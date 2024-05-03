
   <?php

$lado1=$_POST['lado1'];

include_once("clase.php");
$objeto=new Principal;

$definiti=$objeto->definitiva($lado1);


//echo 'SU CODIGO ES '.$codigo;

//echo 'PROMEDIO ES '.$promedio;

  ?>
  <p align="center">Resultado Area de la Circunferencia </p>
  <table width="264" border="1" align="center">
    <tr>
      <td>Radio</td>
      <td><?php echo $lado1 ?></td>
    </tr>
        <tr>
      <td>Area</td>
      <td><?php echo $definiti ?></td>
    </tr>
  </table>
  <p align="center"><a href="index.php">REGRESAR</a></p>
