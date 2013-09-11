<div class="newRequirements form">
<?php echo $this->Form->create('NewRequirement',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add New Requirement'); ?></legend>
	<?php
		echo $this->Form->input('branch_id');
		echo $this->Form->input('charge');
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
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List New Requirements'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
