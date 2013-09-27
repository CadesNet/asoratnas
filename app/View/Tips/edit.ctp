<div class="tips form">
<?php echo $this->Form->create('Tip',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Consejo para la Salud'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title',array('label'=>'Titulo'));
		echo ('Descipcion');
		echo $this->Form->textarea('description',array('class'=>'ckeditor'));
		echo(h("El tamaño de la imagen de Consejo tiene que ser 211 x 205"));
		echo $this->Form->input('filename',array('type' => 'file'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>