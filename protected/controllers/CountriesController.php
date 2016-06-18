<?php
Class CountriesController extends Controller
{
	public function actionIndex()
	{
		//Setear valores al modelo
		/*$model = new Countries();
		$model->name = "Venezuela";
		$model->status = 1;
		$model->save();*/

		//Importar clases
		/*Yii::import("ext.Test");
		include(Yii::getPathOfAlias("application")."/Test.php");
		echo Yii::getPathOfAlias("application")."<br>"; //protected
		echo Yii::getPathOfAlias("webroot")."<br>"; //root
		echo Yii::getPathOfAlias("ext")."<br>"; //protected/extencions
		echo Yii::getPathOfAlias("zii")."<br>"; //framewoork/zii
		$me = new Test();
		echo $me->hi();*/

		//Mensajes de session
		//Yii::app()->user->setFlash("error", "Este es un mensaje de eror");
		//Yii::app()->user->setFlash("warning", "Este es un mensaje de precausion");
		//Yii::app()->user->setFlash("info", "Este es un mensaje de informacion");

		//Componentes parte 1
		/*echo Yii::app()->happy->hi()."<br>";
		echo Yii::app()->happy->hi()."<br>";
		echo Yii::app()->happy->hi()."<br>";
		echo Yii::app()->happy->hi()."<br>";
		echo Yii::app()->happy->hi()."<br>";
		echo Yii::app()->happy->hi()."<br>";
		//Yii::app()->happy->trato=null;
		//echo Yii::app()->sad->hi()."<br>";*/

		//Componente request
		//if(Yii::app()->request->isAjaxRequest){}

		//if(Yii::app()->request->isPostRequest){}
		//ESto es lo mismo que usar isset($_POST["test"]
		/*Yii::app()->request->getPost("test", "defaultValue"); //$_POST["test"]
		Yii::app()->request->getQuery("test", "defaultValue"); //$_GET["test"]
		Yii::app()->request->getParam("test", "defaultValue"); //$_POST["test"] o $_GET["test"]*/

		/*
		//Obtiene el nombre de la carpeta del proyecto
		echo Yii::app()->request->baseUrl."<br>";

		//Ruta desde donde se realizo la peticion
		echo Yii::app()->request->requestUri."<br>";

		//Carpeta actual
		echo Yii::app()->request->pathInfo."<br>";

		//Deberia dar la url anterior
		echo Yii::app()->request->urlReferrer."<br>";

		//Para probar usar luego de controller/action ?codigofacilito=1
		echo Yii::app()->request->queryString."<br>";

		//Version del navegador
		echo Yii::app()->request->userAgent."<br>";

		//Servidor
		echo Yii::app()->request->userHost."<br>";

		//Ip del cliente
		echo Yii::app()->request->userHostAddress."<br>";

		//Redireccionar a cualquier sitio
		echo Yii::app()->request->redirect("http://google.com.ve")."<br>";*/

		//COmponente User
		/*Yii::app()->user->setFlash("error","My mensaje");
		Yii::app()->user->getFlash("error");
		Yii::app()->user->getFlashes(); //Devuelve un array con los mensajes de sesion
		Yii::app()->user->id;
		Yii::app()->user->name;
		Yii::app()->user->setState("apellidos", "riera");
		Yii::app()->user->setState("documentos","excel");
		Yii::app()->user->setState("MyVariableSession", "hola");
		Yii::app()->user->getState("MyVariableSession");
		Yii::app()->user->login("CUserIdentity",360*24);
		Yii::app()->user->logout();*/

		//Roles
		//Yii::app()->authManager->createRole("admin");
		//Yii::app()->authManager->assign("admin",1);
		
		if(Yii::app()->authManager->checkAccess("admin", Yii::app()->user->id))
			echo "Desde authManager<br>";

		if(Yii::app()->user->checkAccess("admin"))
			echo "Desde user";
		
		//Exportar excel
		if(isset($_GET["excel"]))
		{
			$model = Countries::model()->findAll(); 
			$content = $this->renderPartial("excel", array("model"=>$model), true);
			Yii::app()->request->sendFile("test.xls",$content);
		}

		$countries = Countries::model()->findAll();
		$this->render("index", array("countries"=>$countries));
	}

	public function actionCreate()
	{
		/*var_dump($_POST);

		Yii::app()->end();*/
		$model = new Countries;

		if(isset($_POST["Countries"]))
		{
			$model->attributes = $_POST["Countries"];
			/*$model->name = $_POST["Countries"]["name"];
			$model->status = $_POST["Countries"]["status"];*/

			if($model->save())
			{
				Yii::app()->user->setFlash("success", "Guardado correctamente");
				$this->redirect(array("index"));
			}
		}

		$this->render("create", array("model"=>$model));
	}

	public function actionUpdate($id)
	{
		$model = Countries::model()->findByPk($id);

		if(isset($_POST["Countries"]))
		{
			$model->attributes = $_POST["Countries"];

			if($model->save())
			{
				Yii::app()->user->setFlash("success", "Actualizado correctamente");
				$this->redirect(array("index"));
			}
		}

		$this->render("update", array("model" => $model));
	}

	public function actionDelete($id)
	{
		$model = Countries::model()->deleteByPk($id);
		Yii::app()->user->setFlash("success", "Eliminado correctamente");
		$this->redirect(array("index"));
	}

	public function actionView($id)
	{
		$model = Countries::model()->findByPk($id);
		$this->render("view", array("model" => $model));
	}

	public function actionEnabled($id)
	{
		$model = Countries::model()->findByPk($id);

		if($model->status == 1)
			$model->status = 0;
		else
			$model->status = 1;

		$model->save();

		$this->redirect(array("index"));
	}
}