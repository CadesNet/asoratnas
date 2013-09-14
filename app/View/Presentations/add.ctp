<div class="presentations form">
<?php echo $this->Form->create('Presentation'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Presentacion Producto'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo ('Descipcion');
		echo $this->Form->textarea('descripcion',array('class'=>'ckeditor'));
		echo $this->Form->input('item_id',array('label' => '','type' => 'hidden','default'=> $items));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>