<div class="container">
	<div class="row-fluid">
		<div class="span12">

		<?php foreach ($branches as $branch) { ?>

			<div class="row-fluid">
						<div class="span12">
							<div class="row-fluid">
								<div class="span12">
									<h3 class="otrostitle">Cargos en:  <?php echo $branch['Branch']['name'] ?></h3>
								</div>
							</div>
							
							<br>
					
				</div>
			</div>
	
		<div class="row-fluid">
			<ul class = "thumbnails">
			<li class="span5">
				
			</li >
			<li class="span5">
				
			</li>
			<?php  foreach ($branch['Charge'] as $charge) {
					if( $charge['deadline'] >= date('Y-m-d')){

			 ?>
				
		<li class="span5 ">
		<div class="row-fluid cuadrovacantes">
			<div class = "infovacantes">
			 <div class="span4">
			 	<?php echo $this->Html->image("cargo.png")?>
			 </div>
			 <div class="span8">
			 	<h4 class = "titlevacantes"><?php echo $charge['title']  ?></h4>

			 	<p class = "descriptionvacantes">Fecha Limite de Admision de Curriculum Vitae</p>

			 	<p class = "modificacionvacantes"><?php echo $charge['deadline']  ?></p>
			 	<br>
	         
			 </div>
			</div>
			
			 </div>


		 	<div class="row-fluid " >	
			 		<div class="span12" style="text-align: right;">
			 <?php    echo $this->Form->create('Requirement', array('action' => 'select1'));
	             	 echo $this->Form->input('id',array('type' => 'hidden','default'=> $charge['id']));
	         		 echo $this->Form->end(array('label' => __('Click para Aplicar', true), 'escape' => false ,'class' => 'ok btn btn-warning btn-large')); ?>
	         		</div>
				</div>
			 </li>
	
			 <?php }	}?>
			</ul>
			
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



	

</div>	
</div>
</div>
