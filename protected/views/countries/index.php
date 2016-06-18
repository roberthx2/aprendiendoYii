<br>
<?php echo CHtml::link("Crear",array("create")); ?> | 
<?php echo CHtml::link("Excel",array("index","excel"=>1), array("class"=>"btn btn-success btn-small")); ?>
<h1>Countries</h1>
<?php 
	foreach ($countries as $value)
	{ ?>
		<h3> <?php echo $value->name; ?> <small>
		<a href="<?php echo $this->createUrl("enabled", array("id"=>$value->id)); ?>">
			<span class="label label-<?php echo $value->status==1?"info":"warning";?>">
			<?php echo $value->status==1?"Enable":"Disabled"; ?>
			</span>
		</a>
		</small></h3>
		<label class='badge badge-info'> <?php echo $value->id; ?> </label>
		<?php echo CHtml::link("Actualizar", array("update", "id"=>$value->id)); ?> |
		<?php echo CHtml::link("Eliminar", array("delete", "id"=>$value->id), array("confirm"=>"Esta seguro de eliminar?")); ?> |
		<?php echo CHtml::link("Ver", array("view", "id"=>$value->id)); ?> 
	<?php } ?>