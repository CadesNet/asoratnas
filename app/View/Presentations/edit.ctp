<div class="presentations form">
<?php echo $this->Form->create('Presentation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Presentation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('item_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>