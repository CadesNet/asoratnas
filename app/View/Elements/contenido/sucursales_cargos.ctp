<div class="container">
	<div class="row-fluid">
		<div class="span12">

		<?php foreach ($branches as $branch) { ?>
			
	
			<div class="row-fluid">
				
		
						<div class="span1">
							<?php echo $this->Html->image("branch/filename/".$branch['Branch']['filename'])?>
						</div>
						<div class="span11">
							<div class="row-fluid">
								<div class="span12">
									<h3 class = "recipetitle">Cargos en:  <?php echo $branch['Branch']['name'] ?></h3>
								</div>
							</div>
							
							<br>
					
				</div>
			</div>
	
		<div class="row-fluid">
			<ul class = "thumbnails">
			<?php  foreach ($branch['Charge'] as $charge) {
					if( $charge['deadline'] >= date('Y-m-d')){

			 ?>
				
		<li class="span6 ">
		<div class="row-fluid cuadrovacantes">
			<div class = "infovacantes">
			 <div class="span4">
			 	<?php echo $this->Html->image("cargo.png")?>
			 </div>
			 <div class="span8">
			 	<h4 class = "titlevacantes"><?php echo $charge['title']  ?></h4>

			 	<p class = "descriptionvacantes"><?php echo $charge['description']  ?></p>

			 	<p class = "modificacionvacantes"><?php echo $charge['modified']  ?></p>
			 	<br>
			
	         
			 </div>
			</div>
			
			 </div>


		 	<div class  = "botonvacantes">
			 <?php    echo $this->Form->create('Requirement', array('action' => 'select1'));
	             	 echo $this->Form->input('id',array('type' => 'hidden','default'=> $charge['id']));
	         		 echo $this->Form->end('Solicitar'); 
	         		 ?>
	         		</div>

			 </li>
	
			 <?php }	}?>
			<ul class = "thumbnails">
			
		</div>
	</div>

		<?php }  ?>

	</div>
<div class="row-fluid">
		<div class="span12">

<div class="list_carousel responsive" style="height:90px">

				<ul id="foo5" style="height:100%">
					<?php foreach($supermarkets as $supermarket) { ?>
						<li style="width:80px">
						<?php 
					echo $this->Html->link($this->Html->image("supermarket/filename/".$supermarket['Supermarket']['filename'], array("alt" => "Empresa")),$supermarket['Supermarket']['link'],array('escape' => false , 'class' => 'brand'));  
			    	    ?>
						</li>
						<?php }	 ?>

				</ul>
			</div>

		<script type="text/javascript" language="javascript">
			$(function() {
				//	Fuild layout, centering the items
				$('#foo5').carouFredSel({
					width: '100%',
					scroll: 1
				});

			});
		</script>

	

</div>	
</div>
</div>
