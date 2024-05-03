<?php
/**
 *
 */
class Base{

    protected $valor1;
    protected $valor2;
    protected $valor3;


  public function cargar($v){
    $this->valor1=$v;
  }
  public function cargar2($v)
  {
    $this->valor2=$v;
  }
  public function cargar3($v)
  {
    $this->valor3=$v;
  }

  public function imprimirResultado()
  {
    echo $this->resultado.'<br>';
  }
}

/**
 *
 */
class Suma extends Base{

  public function operar()
  {
    $this->resultado=$this->valor1 + $this->valor2 + $this->valor3;
  }
}


 ?>
