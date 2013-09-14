<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Categoria'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label' => 'Nombre'));
		echo $this->Form->input('description',array('label' => 'descripcion'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>