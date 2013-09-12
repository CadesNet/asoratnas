<div class="imagesRecipes form">
<?php echo $this->Form->create('ImagesRecipe',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Images Recipe'); ?></legend>
	<?php
		echo $this->Form->input('filename',array('type' => 'file'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
		echo $this->Form->input('description');
		echo $this->Form->input('recipe_id',array('label' => '','type' => 'hidden','default'=> $recipes));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Images Recipes'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
