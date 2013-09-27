<div class="imagesCategories form">
<?php echo $this->FormEnum->create('ImagesCategory',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Imagenes Categoria'); ?></legend>
	<?php


		echo $this->Form->input('category_id',array('name'=>'data[ImagesCategory][category_id]','type' => 'hidden','default'=> $categories));
		echo(h("opcion Uno para la imagen a aparecera alado del nombre. tamaño 75 x 53")."<br>");
		echo(h("opcion Dos para la imagen a aparecera en el carousel, tamaño 222 x 223")."<br>");
		echo(h("opcion Tres para la imagen del pavo que aparecera cuando se vean las presentarciones, tamaño 33 x 23"));

		echo $this->FormEnum->input('filename',array('type' => 'file','label'=>'Seleccione una imagen'));
		echo $this->FormEnum->input('dir', array('type' => 'hidden','label'=>'Direccion'));
		echo $this->FormEnum->input('type',array('label' => 'Tipo'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Guardar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Images Categories'), array('action' => 'index',$categories),array('class' => 'ok btn btn-info btn-large')); ?></li>
		
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>