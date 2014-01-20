<div class="carousels form">
<?php echo $this->FormEnum->create('Carousel',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Imagen'); ?></legend>
	<?php
		echo $this->FormEnum->input('id');
		echo(h("El tamaño de la imagen del Carousel uno tiene que ser 1172 x 614 ")."<br>");
		echo(h("El tamaño de la imagen del Carousel dos tiene que ser 1165 x 167 "));
		echo $this->FormEnum->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->FormEnum->input('dir',array('type' => 'hidden'));
		echo $this->FormEnum->input('description',array('label' => 'Descripción'));
		echo $this->FormEnum->input('number',array('label' => 'Carousel'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acción'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Imágenes'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>