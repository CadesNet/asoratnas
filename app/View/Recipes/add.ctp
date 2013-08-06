<div class="recipes form">
<?php echo $this->Form->create('Recipe'); ?>
	<fieldset>
		<legend><?php echo __('Add Recipe'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('ingredients');
		echo $this->Form->input('preparation');
		echo $this->Form->input('recommendations');
		echo $this->Form->input('information');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Recipes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Images Recipes'), array('controller' => 'images_recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Images Recipe'), array('controller' => 'images_recipes', 'action' => 'add')); ?> </li>
	</ul>
</div>
