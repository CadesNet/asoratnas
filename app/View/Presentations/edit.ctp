
<div class="presentations form">


<?php echo $this->Form->create('Presentation'); ?>
	<fieldset>
		<legend><?php echo __('Editar Presentacion Producto'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label'=>'id'));
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo ('Descipción derecha');
		echo $this->Form->textarea('description_1',array('class'=>'ckeditor'));
		echo ('Descipción abajo');
		echo $this->Form->textarea('descripcion',array('class'=>'ckeditor'));
		echo $this->Form->select('item_id', $array, array('label'=>'Producto'));		
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>