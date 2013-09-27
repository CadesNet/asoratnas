<div class="branches form">
<?php echo $this->Form->create('Branch',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Sucursal'); ?></legend>
	<?php
		echo $this->Form->input('company_id',array('label' => '','type' => 'hidden','default'=> 1));
		echo $this->Form->input('name',array('label' => 'Nombre'));
		echo(h("El tamaño de la imagen de Sucursal tiene que ser 130 x 143"));
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->Form->input('dir', array('type' => 'hidden','label'=>'Direccion'));
		echo $this->Form->input('type',array('label' => 'Tipo'));
		echo $this->Form->input('address',array('label' => 'Direccion'));
		echo $this->Form->input('phone',array('label' => 'Telefono'));
		echo $this->Form->input('movil',array('label' => 'Celular'));
		echo $this->Form->input('fax',array('label' => 'Fax'));
		echo $this->Form->input('contact',array('label' => 'Contactos'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Guardar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>