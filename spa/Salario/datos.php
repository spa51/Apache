<?php
$A= $_POST['salario'];
$B= $_POST['pventa'];
$C= $_POST['sventa'];
$D= $_POST['tventa'];

include_once("clase.php");

$objeto= new Principal;

$resul1=$objeto->Comision($B,$C,$D);
$resul2=$objeto->Total($A,$B,$C,$D);
$resul3=$objeto->Promedio($B,$C,$D);

 ?>
 <p align="center">SALARIO DEL VENDEDOR</p>
 <table border="0" align="center" >
   <td>Salario: </td>
   <td><?php echo $A ?></td>
 </tr>
   <tr>
     <td>Comision: </td>
     <td><?php echo $resul1 ?></td>
   </tr>
   <tr>
     <td>Total: </td>
     <td><?php echo $resul2 ?></td>
   </tr>
   <tr>
     <td>Promedio: </td>
     <td><?php echo $resul3 ?></td>
   </tr>
 </table>
 <p align="center"><a href="index.php">REGRESAR</a></p>
