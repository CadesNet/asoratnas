<div class="recipes form">
<?php echo $this->Form->create('Recipe'); ?>
	<fieldset>
		<legend><?php echo __('Editar Receta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title',array('label'=>'Titulo'));
		echo $this->Form->input('time',array('label'=>'Tiempo'));
		echo $this->Form->input('portion',array('label'=>'Numero de porciones'));
		echo ('Ingredientes');
		echo $this->Form->textarea('ingredients',array('class'=>'ckeditor'));
		echo ('Preparación');
		echo $this->Form->textarea('preparation',array('class'=>'ckeditor'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>