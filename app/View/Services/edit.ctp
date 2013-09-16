<div class="services form">
<?php echo $this->Form->create('Service'); ?>
	<fieldset>
		<legend><?php echo __('Edit Servicio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->textarea('content',array('class'=>'ckeditor'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
