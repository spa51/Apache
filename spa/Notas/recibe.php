<?php

$m1=$_POST['m1'];$m2=$_POST['m2'];$m3=$_POST['m3'];
$f1=$_POST['f1'];$f2=$_POST['f2'];$f3=$_POST['f3'];
$r1=$_POST['r1'];$r2=$_POST['r2'];$r3=$_POST['r3'];
$a1=$_POST['a1'];$a2=$_POST['a2'];$a3=$_POST['a3'];
$i1=$_POST['i1'];$i2=$_POST['i2'];$i3=$_POST['i3'];

include_once("clase.php");
$objeto=new Definitivas();

$mdef=$objeto->Matematicas($m1,$m2,$m3);
$fdef=$objeto->Fisica($f1,$f2,$f3);
$rdef=$objeto->Religion($r1,$r2,$r3);
$adef=$objeto->Artes($a1,$a2,$a3);
$idef=$objeto->Informatica($i1,$i2,$i3);
$def=($mdef+$fdef+$rdef+$adef+$idef)/5;

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <p align="center">Definitivas</p>
     <table border="0" align="center">
       <tr>
         <td>Matematicas:</td>
         <td><?php echo $mdef ?></td>
       </tr>
       <tr>
         <td>Fisica:</td>
         <td><?php echo $fdef ?></td>
       </tr>
       <tr>
         <td>Religion:</td>
         <td><?php echo $rdef ?></td>
       </tr>
       <tr>
         <td>Artes:</td>
         <td><?php echo $adef ?></td>
       </tr>
       <tr>
         <td>Informatica:</td>
         <td><?php echo $idef ?></td>
       </tr>
       <tr>
         <td>Promedio:</td>
         <td><?php echo $def ?></td>
       </tr>
     </table>
   </body>
 </html>
