<div class="quoteServices form">
<?php echo $this->Form->create('QuoteService'); ?>
	<fieldset>
		<legend><?php echo __('Edit Quote Service'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('service_id');
		echo $this->Form->input('fullname');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('issue');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('&nbsp;&nbsp;&nbsp;&nbsp;Modificar datos&nbsp;&nbsp;&nbsp;&nbsp;', true), 'escape' => false ,'class' => 'ok btn btn-info btn-large')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('QuoteService.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('QuoteService.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Quote Services'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
 <p>&nbsp; </p>
 <p>&nbsp; </p>