<div class="requirements form">
<?php echo $this->Form->create('Requirement'); ?>
	<fieldset>
		<legend><?php echo __('Edit Requirement'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('charge_id');
		echo $this->Form->input('fullname');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('sex');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('curriculum');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Requirement.id')),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $this->Form->value('Requirement.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
		<li><?php echo $this->Html->link(__('List Charges'), array('controller' => 'charges', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charge'), array('controller' => 'charges', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
