<div class="container">
	
	 <?php 
		 	foreach ($services as $value) { ?>
	<div class="row-fluid">
		<div class="span12">
		
		 	<?php 	echo $value['Service']['content'];?>
		 
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<div class="quoteServices form">
			<?php echo $this->Form->create('QuoteService',array('action' => 'select' )); ?>
				<fieldset>
					<legend><?php echo __('Add Quote Service'); ?></legend>
				<?php
					echo $this->Form->input('service_id',array('type' => 'hidden','default'=> $value['Service']['id']));
					echo $this->Form->input('fullname');
					echo $this->Form->input('address');
					echo $this->Form->input('phone');
					echo $this->Form->input('email');
					echo $this->Form->input('issue');
					echo $this->Form->input('message');
				?>
				</fieldset>
			<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>
<?php	} ?>

</div>