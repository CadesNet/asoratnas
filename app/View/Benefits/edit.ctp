<div class="benefits form">
<?php echo $this->Form->create('Benefit',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Beneficio'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label' => 'id'));
		echo $this->Form->input('title',array('label' => 'Titulo'));
			echo ('Descipcion');
		echo $this->Form->textarea('description',array('class'=>'ckeditor','label'=>'Descripcion'));
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Nombre archivo'));
		echo $this->Form->input('dir', array('type' => 'hidden','label'=>'Direccion'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Modificar')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>