<div class="carousels form">
<?php echo $this->FormEnum->create('Carousel',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Carousel'); ?></legend>
	<?php
		echo $this->FormEnum->input('filename',array('type' => 'file','label' => 'Nombre archivo'));
		echo $this->FormEnum->input('dir',array('type' => 'hidden','label'=>'Direccion'));
		echo $this->FormEnum->input('description',array('label' => 'Descripcion'));
		echo $this->FormEnum->input('number',array('label' => 'Numero'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
	
		<li><?php echo $this->Html->link(__('List Carousels'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>