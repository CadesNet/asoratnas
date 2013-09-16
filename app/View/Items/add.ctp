<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Producto'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo $this->Form->input('category_id',array('label' => '','type' => 'hidden','default'=> $categories));
		
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Guardar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>