<div class="tips form">
<?php echo $this->Form->create('Tip',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Consejo para la Salud'); ?></legend>
	<?php
		echo $this->Form->input('title',array('label'=>'Titulo'));
		echo ('Descipcion');
		echo $this->Form->textarea('description', array('class'=>'ckeditor'));//verficar el class requiered no tiene q estar validado en el modelo 
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Guardar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>