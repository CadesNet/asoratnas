<div class="presentationsQuotes view">
<h2><?php  echo __('Presentations Quote'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($presentationsQuote['PresentationsQuote']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Presentation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($presentationsQuote['Presentation']['name'], array('controller' => 'presentations', 'action' => 'view', $presentationsQuote['Presentation']['id']),array('class' => 'ok btn btn-info ')); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quote'); ?></dt>
		<dd>
			<?php echo $this->Html->link($presentationsQuote['Quote']['name'], array('controller' => 'quotes', 'action' => 'view', $presentationsQuote['Quote']['id']),array('class' => 'ok btn btn-info ')); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo h($presentationsQuote['PresentationsQuote']['detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($presentationsQuote['PresentationsQuote']['amount']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Presentations Quote'), array('action' => 'edit', $presentationsQuote['PresentationsQuote']['id']),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Presentations Quote'), array('action' => 'delete', $presentationsQuote['PresentationsQuote']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $presentationsQuote['PresentationsQuote']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Presentations Quotes'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presentations Quote'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Presentations'), array('controller' => 'presentations', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presentation'), array('controller' => 'presentations', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotes'), array('controller' => 'quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quote'), array('controller' => 'quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
