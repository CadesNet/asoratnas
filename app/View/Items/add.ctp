<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Producto'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo $this->Form->input('category_id',array('label' => '','type' => 'hidden','default'=> $categories));
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>