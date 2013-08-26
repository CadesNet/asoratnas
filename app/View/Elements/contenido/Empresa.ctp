<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
		 <?php 
		 	foreach ($companies as $value) {
		 		 $body =  h($value['Company']['content']);
        $bodyNew = html_entity_decode($body);  
        //  echo strip_tags(htmlspecialchars_decode( $body));
        echo $bodyNew;
		 		//echo $value['Company']['content'];
		 	}
		 ?>
		</div>
	</div>
</div>
