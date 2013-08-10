<div class="recipes form">
<?php echo $this->Form->create('Recipe'); ?>
	<fieldset>
		<legend><?php echo __('Edit Recipe'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('time');
		echo $this->Form->input('portion');
		echo $this->Form->input('preparation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Recipe.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Recipe.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Recipes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ingredients'), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient'), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images Recipes'), array('controller' => 'images_recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Images Recipe'), array('controller' => 'images_recipes', 'action' => 'add')); ?> </li>
	</ul>
</div>
