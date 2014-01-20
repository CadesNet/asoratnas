<div class="supermarkets form">
<?php echo $this->Form->create('Supermarket',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Supermercado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo(h("El tamaño de la imagen de los supermercados tiene que ser 107 x 78 "));
		echo $this->Form->input('filename',array('type' => 'file','label'=>'seleccione una imagen'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
		echo $this->Form->input('link',array('label'=>'URL'));
		echo $this->Form->input('description',array('label'=>'Descripción'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>