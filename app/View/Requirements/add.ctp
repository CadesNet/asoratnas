<div class="requirements form">
<?php echo $this->Form->create('Requirement',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Requerimiento'); ?></legend>
	<?php
		echo $this->Form->input('charge_id');
		echo $this->Form->input('fullname');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('sex');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('curriculum',array('type' => 'file'));
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Guardar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acción'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Requirements'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
		<li><?php echo $this->Html->link(__('List Charges'), array('controller' => 'charges', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charge'), array('controller' => 'charges', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>