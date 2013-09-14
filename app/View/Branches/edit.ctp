<div class="branches form">
<?php echo $this->Form->create('Branch',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Sucursal'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label' => 'id'));
		echo $this->Form->input('company_id', array('type' => 'hidden','label'=>'Company id'));
		echo $this->Form->input('name',array('label' => 'nombre'));
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Nombre archivo'));
		echo $this->Form->input('dir', array('type' => 'hidden','label'=>'Direccion'));
		echo $this->Form->input('type',array('label' => 'archivo'));
		echo $this->Form->input('address',array('label' => 'Apellidos'));
		echo $this->Form->input('phone'array('label' => 'Telefono'));
		echo $this->Form->input('movil',array('label' => 'Celular'));
		echo $this->Form->input('fax',array('label' => 'Fax'));
		echo $this->Form->input('contact',array('label' => 'Contactos'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Modificar')); ?>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>