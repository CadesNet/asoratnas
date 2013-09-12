<div class="presentations form">
<?php echo $this->Form->create('Presentation'); ?>
	<fieldset>
		<legend><?php echo __('Add Presentation'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('item_id',array('label' => '','type' => 'hidden','default'=> $items));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

