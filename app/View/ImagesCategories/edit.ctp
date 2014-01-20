<div class="imagesCategories form">
<?php echo $this->FormEnum->create('ImagesCategory',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Imagenes Categoria'); ?></legend>
	<?php
		echo $this->FormEnum->input('id');
		echo $this->FormEnum->input('category_id',array('label' => 'Categoria'));
		echo(h("opción Uno para la imagen a aparecera alado del nombre. tamaño 75 x 53")."<br>");
		echo(h("opción Dos para la imagen a aparecera en el carousel, tamaño 222 x 223")."<br>");
		echo(h("opción Tres para la imagen del pavo que aparecera cuando se vean las presentarciones, tamaño 33 x 23"));
		echo $this->FormEnum->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->FormEnum->input('dir', array('type' => 'hidden','label'=>'Dirección'));
		echo $this->FormEnum->input('type',array('label'=>'Tipo'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>