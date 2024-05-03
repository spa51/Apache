<?php

/**
 *
 */
 class Inventario{

     protected $valor1;
     protected $valor2;
     protected $valor3;
     protected $valor4;

   public function cargar($v1,$v2,$v3,$v4){
     $this->valor1=$v1;
     $this->valor2=$v2;
     $this->valor3=$v3;
     $this->valor4=$v4;
   }

   public function imprimirResultado()
   {
     echo $this->resultado.'<br>';
   }


 }

 class Factura extends Inventario{

   public function total()
   {
     $this->resultado= $this->valor2 * $this->valor3;
   }
 }
 ?>
