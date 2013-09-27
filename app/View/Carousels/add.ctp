<div class="carousels form">
<?php echo $this->FormEnum->create('Carousel',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Carousel'); ?></legend>
	<?php
		echo(h("El tamaño de la imagen del Carousel uno tiene que ser 1172 x 614 ")."<br>");
		echo(h("El tamaño de la imagen del Carousel dos tiene que ser 1165 x 167 "));
		echo $this->FormEnum->input('filename',array('type' => 'file','label' => 'Seleccione una imagen'));
		echo $this->FormEnum->input('dir',array('type' => 'hidden','label'=>'Direccion'));
		echo $this->FormEnum->input('description',array('label' => 'Descripcion'));
		echo $this->FormEnum->input('number',array('label' => 'Numero'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Guardar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
	
		<li><?php echo $this->Html->link(__('List Carousels'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>