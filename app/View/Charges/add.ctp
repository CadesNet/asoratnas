<div class="charges form">
<?php echo $this->Form->create('Charge'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Cargo'); ?></legend>
	<?php
		echo $this->Form->input('branch_id',array('label' => '','type' => 'hidden','default'=> $branches));
		echo $this->Form->input('title',array('label' => 'Titulo'));
		echo $this->Form->input('deadline',array('label' => 'Fecha limite'));
		echo $this->Form->input('description',array('label' => 'Descripcion'));
		echo $this->Form->input('formation',array('label' => 'Formation'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Guardar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>