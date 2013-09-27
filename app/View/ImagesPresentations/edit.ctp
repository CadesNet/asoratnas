<div class="imagesPresentations form">
<?php echo $this->Form->create('ImagesPresentation',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Imagenes Presentaciones'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label'=>'id'));
		echo(h("El tamaño de la imagen de las presentaciones tiene que ser 360 x 346 "));
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->Form->input('dir', array('type' => 'hidden','label'=>'Directorio'));
		echo $this->Form->input('description',array('label'=>'Descripcion'));
		echo $this->Form->input('presentation_id');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>