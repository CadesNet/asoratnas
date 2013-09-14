<div class="consultations form">
<?php echo $this->Form->create('Consultation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Consultation'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label' => 'id'));
		echo $this->Form->input('name',array('label' => 'Nombre'));
		echo $this->Form->input('address',array('label' => 'Apellidos'));
		echo $this->Form->input('phone',array('label' => 'Telefono'));
		echo $this->Form->input('email',array('label' => 'Correo Electronico'));
		echo $this->Form->input('message',array('label' => 'message'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Modificar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Consultation.id')),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $this->Form->value('Consultation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Consultations'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
