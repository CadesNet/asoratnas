<div class="companies form">
<?php echo $this->Form->create('Company'); ?>
	<fieldset>
		<legend><?php echo __('Editar Empresa'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label' => 'id'));
		echo $this->Form->textarea('content',array('class'=>'ckeditor'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>