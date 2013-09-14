<div class="imagesPresentations form">
<?php echo $this->Form->create('ImagesPresentation',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Imagenes Presentaciones'); ?></legend>
	<?php
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Nombre archivo'));
		echo $this->Form->input('dir', array('type' => 'hidden','label'=>'Direccion'));
		echo $this->Form->input('description',array('label'=>'Descripcion'));
		echo $this->Form->input('presentation_id',array('label' => '','type' => 'hidden','default'=> $presentations));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Images Presentations'), array('action' => 'index',$presentations),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>