<?php

class HolaController extends Controller
{
	#http://localhost/aprendiendoYii/hola/index
	public function actionIndex()
	{
		//$model = CActiveRecord::model("Users")->findAll();
		$model = Users::model()->findAll();
		$twitter = "@roberthx2";
		$this->render("index",array("model"=>$model,"twitter"=>$twitter));
	}
}