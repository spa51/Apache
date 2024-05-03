<?php

/**
 *
 */
class camion
{
  protected $modelo;
    protected $color;
      protected $placa;
        protected $distancia;
          protected $tiempo;


  public function cargar($v1,$v2,$v3,$v4,$v5)
  {
    $this->$modelo=$v1;
    $this->$color=$v2;
    $this->$placa=$v3;
    $this->$distancia=$v4;
    $this->$tiempo=$v5;
  }

  public function imprimirResultado()
   {
     echo $this->resultado.'<br>';
   }
}

class Factura extends camion{

   public function total()
   {
     $this->resultado= ($this->$distancia + $this->$tiempo);
   }
 }


 ?>
