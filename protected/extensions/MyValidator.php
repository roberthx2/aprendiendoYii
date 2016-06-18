<?php

class MyValidator extends CValidator
{
	public $word = "test";
	public function validateAttribute($object, $attribute)
	{
		if($object->$attribute == $this->word)
			$this->addError($object, $attribute, "Esto es un error");
	}	
} 

?>