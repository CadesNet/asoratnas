<div class="benefits form">
<?php echo $this->Form->create('Benefit',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Beneficio'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label' => 'id'));
		echo $this->Form->input('title',array('label' => 'Titulo'));
			echo ('Descipcion');
		echo $this->Form->textarea('description',array('class'=>'ckeditor','label'=>'Descripcion'));
		echo(h("El tamaño de la imagen de beneficio tiene que ser 211 x 205"));
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>