<div class="charges form">
<?php echo $this->Form->create('Charge',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Cargo'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label' => 'id'));
		echo $this->Form->input('branch_id');
		echo $this->Form->input('title',array('label' => 'Titulo'));
		echo $this->Form->input('deadline',array('label' => 'Fecha limite'));
		echo ('Descripción');
		echo $this->Form->textarea('description',array('class'=>'ckeditor'));
		echo ('Formación');

		echo $this->Form->textarea('formation',array('class'=>'ckeditor'));
		
		echo(h("El tamaño de la imagen de publicidad tiene que ser 134 x 115"));
		echo $this->Form->input('filename',array('type' => 'file','label' => 'Seleccione una imagen '));
		echo $this->Form->input('dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>