<div class="row-fluid">
	<div class="span6">
		<h1>Create role</h1>
		<?php $form = $this->beginWidget("CActiveForm", array(
			'id'=>"role-form",
			'enableAjaxValidation'=>true,
			'clientOptions'=> array("validateOnSubmit"=>true)
		)); ?>

		<?php echo $form->labelEx($role, "name"); ?> 
		<?php echo $form->textField($role, "name"); ?>
		<?php echo $form->error($role, "name"); ?>

		<?php echo $form->labelEx($role, "description"); ?> 
		<?php echo $form->textArea($role, "description"); ?>
		<?php echo $form->error($role, "description"); ?>
		<br>
		<?php echo CHtml::submitButton("Create", array("class" => "btn btn-primary"));?>
	<?php $this->endWidget(); ?>
	</div>
	<div class="span6">
		<ul class="nav nav-tabs nav-stacked">
		<?php foreach(Yii::app()->authManager->getAuthItems() as $data):?>
		<?php $enabled=Yii::app()->authManager->checkAccess($data->name, $model->id)?>
		<li>
			<h4><?php echo $data->name; ?>
				<small>
					<?php if($data->type==0)  echo "Role"; ?>
					<?php if($data->type==1)  echo "Tarea"; ?>
					<?php if($data->type==2)  echo "Operacion"; ?>
				</small>
				<?php echo CHtml::link($enabled?"Off":"On",array("users/assign", "id"=>$model->id, "item"=>$data->name),array("class"=>$enabled?"btn btn-primary":"btn")); ?> 
			</h4>
			<p> 
				
				<?php // $enabled?"<span class='label label-important'>Asigned</span>":""; ?>
				<?php echo $data->description; ?>
			</p>
			<hr>
		</li>
		<?php endforeach;?>
		</ul>
	</div>
</div>