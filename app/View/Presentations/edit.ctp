<div class="presentations form">
<?php echo $this->Form->create('Presentation'); ?>
	<fieldset>
		<legend><?php echo __('Editar Presentacion Producto'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label'=>'id'));
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo ('Descipcion');
		echo $this->Form->textarea('descripcion',array('class'=>'ckeditor'));
		echo $this->Form->input('item_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Modificar')); ?>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>