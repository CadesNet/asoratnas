<div class="companies form">
<?php echo $this->Form->create('Company',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Company'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo ('Descipcion');
		echo $this->Form->textarea('content',array('class'=>'ckeditor','label'=>'Descripcion'));
		echo(h("La imagen tiene que ser 1165 x 167 "));
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
