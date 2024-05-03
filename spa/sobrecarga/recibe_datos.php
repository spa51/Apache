<?php

$quiz=$_POST['quiz'];
$taller=$_POST['taller'];
$trabajo=$_POST['trabajo'];
$parcial=$_POST['parcial'];

include_once("Clase_sobrecarga.php");

$objeto = new Sobrecargar();
$definitiva= $objeto->Definitiva($quiz,$taller,$trabajo,$parcial);
$definitiva2= $objeto->Definitiva2($taller,$trabajo,$parcial);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p></p>
    <table border="0" align="center">
      <tr>
        <td>Definitiva: </td>
        <td><?php echo $definitiva ?></td>
      </tr>
      <tr>
        <td>Definitiva2: </td>
        <td><?php echo $definitiva2 ?></td>
      </tr>
    </table>

  </body>
</html>
