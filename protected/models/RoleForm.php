<?php
Class RoleForm extends CFormModel
{
	public static $types = array("Operation","Task","Role");
	public $name;
	public $description;
	public $type = 2;

	public function rules()
	{
		return array(
			array("name, type", "required", "message"=>"Esta mal {attribute}"),
			//array("description", "ext.MyValidator", "word"=>"dbz"),
			array("description", "safe"),//(safe)Sin regla de validacion
			//array("description", "numerical", "allowEmpty"=>false, "integerOnly"=>true),
			//array("description", "email"),
			//array("description", "exist", "attributeName"=>"username", "className"=>"Users"),
			//array("description", "unique", "attributeName"=>"username", "className"=>"Users"),
			//array("description", "filter", "filter"=>"strtoupper"),//Ejecuta metodos php
			//array("description, name", "validando"),
		);
	}

	//NO ME FUNCIONO
	/*public function validando($attribute, $params)
	{
		if($this->attribute=="test")
			$this->addError($attribute, "Esto no puede ser test");
	}*/
}
?>