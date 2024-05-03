<?php

$dato1=$_POST['dato1'];
$dato2=$_POST['dato2'];
$dato3=$_POST['dato3'];
$dato4=$_POST['dato4'];


include_once("dato.php");

$objeto = new Principal();
$suma= $objeto->suma($dato1,$dato2,$dato3,$dato4);
$multiplica= $objeto->multiplica($dato1,$dato2,$dato3);
$cuadrado= $objeto->cuadrado($dato1,$dato2);

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
        <td>Suma: </td>
        <td><?php echo $suma ?></td>
      </tr>
      <tr>
        <td>Multiplicacion: </td>
        <td><?php echo $multiplica ?></td>
      </tr>
      <tr>
        <td>cuadrado: </td>
        <td><?php echo $cuadrado ?></td>
      </tr>
    </table>

  </body>
</html>
