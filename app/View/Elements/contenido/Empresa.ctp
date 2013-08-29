<div class="row-fluid">
	<div class="span12">
		<h3 style="color:#25A781;border-bottom: 8px solid #25A781;">Historia</h3>
	</div>
</div>
<br>
<br>
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
