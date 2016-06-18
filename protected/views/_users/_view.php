<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="media">

	

	<div class="media-body">
		<h3 class="media-heading">
			<?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>:
			<?php echo CHtml::encode($data->username); ?> <small><?php echo CHtml::encode($data->getAttributeLabel('email')); ?></small>
		</h3>
		<p><?php echo CHtml::encode($data->password); ?></p>
	</div>

	
</div>