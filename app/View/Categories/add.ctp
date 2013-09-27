<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Categoria'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label' => 'Nombre'));
		echo $this->Form->input('description',array('label' => 'Color'));
		echo $this->Form->input('removed',array('label' => '','type' => 'hidden','default'=> 'no'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Guardar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>