<div class="quotes form">
<?php echo $this->Form->create('Quote'); ?>
	<fieldset>
		<legend><?php echo __('Add Quote'); ?></legend>
	<?php
<<<<<<< HEAD
		echo $this->Form->input('name');
=======
		echo $this->Form->input('fullname');
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Quotes'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
<<<<<<< HEAD
		<li><?php echo $this->Html->link(__('List Presentations Quotes'), array('controller' => 'presentations_quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presentations Quote'), array('controller' => 'presentations_quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
=======
		<li><?php echo $this->Html->link(__('List Items Quotes'), array('controller' => 'items_quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Items Quote'), array('controller' => 'items_quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
	</ul>
</div>
