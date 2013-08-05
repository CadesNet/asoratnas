<div class="supermarkets form">
<?php echo $this->Form->create('Supermarket'); ?>
	<fieldset>
		<legend><?php echo __('Add Supermarket'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('filename');
		echo $this->Form->input('dir');
		echo $this->Form->input('link');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Supermarkets'), array('action' => 'index')); ?></li>
	</ul>
</div>
