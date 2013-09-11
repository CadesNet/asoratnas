<div class="presentationsQuotes form">
<?php echo $this->Form->create('PresentationsQuote'); ?>
	<fieldset>
		<legend><?php echo __('Edit Presentations Quote'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('presentation_id');
		echo $this->Form->input('quote_id');
		echo $this->Form->input('detail');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PresentationsQuote.id')),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $this->Form->value('PresentationsQuote.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Presentations Quotes'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?></li>
		<li><?php echo $this->Html->link(__('List Presentations'), array('controller' => 'presentations', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presentation'), array('controller' => 'presentations', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotes'), array('controller' => 'quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quote'), array('controller' => 'quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
