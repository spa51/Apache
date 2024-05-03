<?php
  $fechaActual = date('Y-m-d'); 
  $datetime1 = date_create('2021-11-10');
  $datetime2 = date_create($fechaActual);
  $contador = date_diff($datetime1, $datetime2);
  $differenceFormat = '%a';
  echo $contador->format($differenceFormat);
?>