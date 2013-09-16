<div class="carousels form">
<?php echo $this->FormEnum->create('Carousel',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Carousel'); ?></legend>
	<?php
		echo $this->FormEnum->input('id');
		echo $this->FormEnum->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->FormEnum->input('dir',array('type' => 'hidden'));
		echo $this->FormEnum->input('description',array('label' => 'Descripcion'));
		echo $this->FormEnum->input('number',array('label' => 'Numero'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Carousels'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>