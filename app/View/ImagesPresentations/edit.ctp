<div class="imagesPresentations form">
<?php echo $this->Form->create('ImagesPresentation',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Imagenes Presentaciones'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label'=>'id'));
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Nombre archivo'));
		echo $this->Form->input('dir', array('type' => 'hidden','label'=>'Direccion'));
		echo $this->Form->input('description',array('label'=>'Descripcion'));
		echo $this->Form->input('presentation_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Modificar')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>