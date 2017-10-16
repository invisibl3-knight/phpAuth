<?php 
//show errors 

if(count($errors) > 0){ ?>
	<div class="error">
		<?php foreach ($errors as $error){ ?>
			<p><?php echo $error; ?> </p>
		<?php } ?>
	</div>
<?php 
} 
//show errors

?>