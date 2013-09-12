<div class="imagesRecipes form">
<?php echo $this->Form->create('ImagesRecipe',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Images Recipe'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('filename',array('type' => 'file'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
		echo $this->Form->input('description');
		echo $this->Form->input('recipe_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

