<div class="imagesCategories form">
<?php echo $this->FormEnum->create('ImagesCategory',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Imagenes Categoria'); ?></legend>
	<?php
		echo $this->FormEnum->input('id',array('label' => 'id'));
		echo $this->FormEnum->input('category_id',array('label' => 'Categoria'));
		echo $this->FormEnum->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->FormEnum->input('dir', array('type' => 'hidden','label'=>'Direccion'));
		echo $this->FormEnum->input('type',array('label'=>'Tipo'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>