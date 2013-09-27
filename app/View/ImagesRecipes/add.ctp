<div class="imagesRecipes form">
<?php echo $this->Form->create('ImagesRecipe',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Imagenes Recetas'); ?></legend>
	<?php
		echo(h("El tamaño de la imagen de las recetas tiene que ser 253 x 205 "));
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->Form->input('dir', array('type' => 'hidden','label'=>'Direccion'));
		echo $this->Form->input('description',array('label'=>'Descripcion'));
		echo $this->Form->input('recipe_id',array('label' => '','type' => 'hidden','default'=> $recipes));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Guardar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Images Recipes'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>
