<div class="branches form">
<?php echo $this->Form->create('Branch',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Sucursal'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label' => 'id'));
		echo $this->Form->input('company_id', array('type' => 'hidden','label'=>'Company id'));
		echo $this->Form->input('name',array('label' => 'Nombre'));
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->Form->input('dir', array('type' => 'hidden','label'=>'Direccion'));
		echo $this->Form->input('type',array('label' => 'Tipo'));
		echo $this->Form->input('address',array('label' => 'Apellidos'));
		echo $this->Form->input('phone',array('label' => 'Telefono'));
		echo $this->Form->input('movil',array('label' => 'Celular'));
		echo $this->Form->input('fax',array('label' => 'Fax'));
		echo $this->Form->input('contact',array('label' => 'Contactos'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>