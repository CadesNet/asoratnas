<div class="branches form">
<?php echo $this->FormEnum->create('Branch',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Sucursal'); ?></legend>
	<?php
		echo $this->FormEnum->input('company_id',array('label' => '','type' => 'hidden','default'=> 1));
		echo $this->FormEnum->input('name',array('label' => 'Nombre'));
		echo(h("El tamaño de la imagen de Sucursal tiene que ser 130 x 143"));
		echo $this->FormEnum->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->FormEnum->input('dir', array('type' => 'hidden'));
		echo $this->FormEnum->input('type',array('label' => 'Tipo'));
		echo $this->FormEnum->input('address',array('label' => 'Direccion'));
		echo $this->FormEnum->input('phone',array('label' => 'Telefono'));
		echo $this->FormEnum->input('movil',array('label' => 'Celular'));
		echo $this->FormEnum->input('fax',array('label' => 'Fax'));
		echo $this->FormEnum->input('contact',array('label' => 'Contactos'));
		echo $this->FormEnum->input('branch',array('label' => 'Mostrar en:'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Guardar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>

 <p>&nbsp; </p>
 <p>&nbsp; </p>