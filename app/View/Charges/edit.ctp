<div class="charges form">
<?php echo $this->Form->create('Charge'); ?>
	<fieldset>
		<legend><?php echo __('Editar Cargo'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label' => 'id'));
		echo $this->Form->input('branch_id');
		echo $this->Form->input('title',array('label' => 'Titulo'));
		echo $this->Form->input('deadline',array('label' => 'deadline'));
		echo $this->Form->input('description',array('label' => 'descripcion'));
		echo $this->Form->input('formation',array('label' => 'formation'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Modificar')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>