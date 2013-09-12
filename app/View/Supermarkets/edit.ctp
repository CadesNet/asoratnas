<div class="supermarkets form">
<?php echo $this->Form->create('Supermarket',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Supermarket'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('filename',array('type' => 'file'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
		echo $this->Form->input('link');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

