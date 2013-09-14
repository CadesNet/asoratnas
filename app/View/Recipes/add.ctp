<div class="recipes form">
<?php echo $this->Form->create('Recipe'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Receta'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('time');
		echo $this->Form->input('portion');
		echo ('Ingredientes');
		echo $this->Form->textarea('ingredients',array('class'=>'ckeditor'));
		echo ('Preparacion');
		echo $this->Form->textarea('preparation',array('class'=>'ckeditor'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>