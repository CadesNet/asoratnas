<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Editar Categoria'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label' => 'id'));
		echo $this->Form->input('name',array('label' => 'Nombre'));
		echo $this->Form->input('description',array('label' => 'Descripcion'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Modificar')); ?>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>