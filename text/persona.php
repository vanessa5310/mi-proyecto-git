<?php 

/**
 * 
 */
class persona 
{
	public $nombre,$apellido,$edad;
	
	public function setNombre($nombre)
	{
		$this->nombre=strtolower($nombre);

	}

};

//clase para sumar
 class operacion{
 public $num1,$num2,$resultado;
 function __construct($n1,$n2){

 	$this->num1=$n1;
 	$this->num2=$n2;
 }
  public function getsuma(){

$this->resultado=$this->num1+$this->num2;
return $this->resultado;
  }

 };

  


 ?>