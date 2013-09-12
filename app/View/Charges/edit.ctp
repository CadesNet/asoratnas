<div class="charges form">
<?php echo $this->Form->create('Charge'); ?>
	<fieldset>
		<legend><?php echo __('Edit Charge'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('branch_id');
		echo $this->Form->input('title');
		echo $this->Form->input('deadline');
		echo $this->Form->input('description');
		echo $this->Form->input('formation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

