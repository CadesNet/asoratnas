<div class="supermarkets form">
<?php echo $this->Form->create('Supermarket',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Supermercado'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo(h("El tamaño de la imagen de los supermercados tiene que ser 107 x 78 "));
		echo $this->Form->input('filename',array('type' => 'file','label'=>'seleccione una imagen'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
		echo $this->Form->input('link',array('label'=>'URL'));
		echo $this->Form->input('description',array('label'=>'Descripcion'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Guardar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acción'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Supermercados'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>