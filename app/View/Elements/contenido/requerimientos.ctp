<div class="container">
	<div class="row-fluid">
		<div class="span9">
			<div class="row-fluid">
				
			
					
						<div class="span11">
							<div class="row-fluid">
								<div class="span12">
									<h3 class = "recipetitle">Aplicar para</h3>
								</div>
							</div>
							
							<br>
					
				</div>
			</div>
		<?php  foreach ($charges as $charge) { ?>	
	<div class="row-fluid">
		<div class="sapn12">
			
			<div class="row-fluid">
			 <div style="text-align:center" class="span12">
			 	<?php echo $charge['Charge']['title']; ?> 
			 </div>
			</div>
			<div class="row-fluid">
			 <div class="span12">
			 	<p>Fecha limite de admicion del curriculum Vitae:</p>
			 	<br>
			 	<?php echo $charge['Charge']['deadline']; ?> 
			 </div>
			</div>
			<div class="row-fluid">
			 <div class="span12">
			 	<p>DESCRIPCION DE LA VACANCIA</p>
			 	<br>
			 	<?php echo $charge['Charge']['description']; ?> 
			 </div>
			</div>
			<div class="row-fluid">
			 <div class="span12">
			  	<p>FORMACION REQUERIDA</p>
			  	<br>
			 	<?php echo $charge['Charge']['formation']; ?> 
			 </div>
			</div>


			 		
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<div class="requirements form">
					<?php echo $this->FormEnum->create('Requirement',array('type' => 'file','controller'=>'Requirements','action' => 'select',1)); ?>
						<fieldset>
							<legend><?php echo __('Add Requirement'); ?></legend>
						<?php
					
				           echo $this->FormEnum->input('charge_id',array('type' => 'hidden','default'=>  $charge['Charge']['id']));
							echo $this->FormEnum->input('fullname');
							echo $this->FormEnum->input('date_of_birth');
							echo $this->FormEnum->input('sex');
							echo $this->FormEnum->input('address');
							echo $this->FormEnum->input('phone');
							echo $this->FormEnum->input('email');
							echo $this->FormEnum->input('curriculum',array('type' => 'file'));
							echo $this->FormEnum->input('message');
						?>
						</fieldset>
					<?php echo $this->Form->end(__('Submit')); ?>
				</div>
			</div>
		</div>
		<?php	}?>	
	</div>
</div>
</div>
</div>