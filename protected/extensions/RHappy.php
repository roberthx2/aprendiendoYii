<?php

class RHappy extends CApplicationComponent
{
	public $trato;

	public function init()
	{
		echo "Inicializando<br>";
	}

	public function hi()
	{
		if($this->trato === null)
			return "Hola como esta usted.";
		else if($this->trato === 1)
			return "Hola men como estas.";
	}
}

?>