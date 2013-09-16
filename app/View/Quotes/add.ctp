<div class="quotes form">
<?php echo $this->Form->create('Quote'); ?>
	<fieldset>
		<legend><?php echo __('Add Quote'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo $this->Form->input('address',array('label'=>'apellidos'));
		echo $this->Form->input('phone',array('label'=>'Telefono'));
		echo $this->Form->input('email',array('label'=>'Email'));
		echo $this->Form->input('message',array('label'=>'message'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Guardar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Quotes'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
		<li><?php echo $this->Html->link(__('List Presentations Quotes'), array('controller' => 'presentations_quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presentations Quote'), array('controller' => 'presentations_quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>