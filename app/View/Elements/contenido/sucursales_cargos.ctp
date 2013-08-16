<div class="container">
	<div class="row-fluid">
		<div class="span9">

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
		<div class="span6">
			<div class="row-fluid">
			<?php  foreach ($branch['Charge'] as $charge) { ?>
		
		
			 <div class="span2">
			 	<?php echo $this->Html->image("cargo.png")?>
			 </div>
			 <div class="span4">
			 	<p><?php echo $charge['title']  ?></p>
			 	<br>
			<?php    echo $this->Form->create('Requirement', array('action' => 'select1'));
	             	 echo $this->Form->input('id',array('type' => 'hidden','default'=> $charge['id']));
	         		 echo $this->Form->end('Solicitar'); 
	         ?>
			 </div>
			 <?php	}?>
			</div>
			
		</div>
	</div>
		<?php }  ?>
</div>
</div>
</div>