<h1> Siguenos en twitter: <?php echo  $twitter; ?></h1>

<?php
	foreach ($model as $data) 
	{
		echo "<h1>".$data->username."</h1>";	
	}
?>