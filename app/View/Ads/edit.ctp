<div class="ads form">
<?php echo $this->FormEnum->create('Ad',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar notificacion'); ?></legend>
	<?php
		echo $this->FormEnum->input('id',array('label' => 'id'));
		echo $this->FormEnum->input('type',array('label' => 'archivo'));
		echo $this->FormEnum->input('link',array('label' => 'Url'));
		echo $this->FormEnum->input('filename',array('type' => 'file','label'=>'Nombre archivo'));
		echo $this->FormEnum->input('dir', array('type' => 'hidden','label'=>'direccion'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Modificar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Ads'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>