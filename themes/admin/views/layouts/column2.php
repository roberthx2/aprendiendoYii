<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container-fluid" style="padding-top:0">
	<div class="row-fluid">
		<div class="span3">
		  <div class="well sidebar-nav">
            <?php
				$this->widget('zii.widgets.CMenu', array(
					'items'=>$this->menu,
					'htmlOptions'=>array('class'=>'nav nav-list'),
				));
			?>
          </div><!--/.well -->
		</div>
		<div class="span9">
			<?php echo $content; ?>
		</div>
	</div>
</div>
<?php $this->endContent(); ?>