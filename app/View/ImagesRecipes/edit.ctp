<div class="imagesRecipes form">
<?php echo $this->Form->create('ImagesRecipe',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Imagenes Recetas'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label'=>'id'));
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->Form->input('dir', array('type' => 'hidden','label'=>'Direccion'));
		echo $this->Form->input('description',array('label'=>'Descripcion'));
		echo $this->Form->input('recipe_id');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>
