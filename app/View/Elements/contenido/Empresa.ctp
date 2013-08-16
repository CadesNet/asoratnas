<div class="container">
	<div class="row-fluid">
		<div class="span12">
		 <?php 
		 	foreach ($companies as $value) {
		 		echo $value['Company']['content'];
		 	}
		 ?>
		</div>
	</div>
</div>
