<div class="itemsQuotes view">
<h2><?php  echo __('Items Quote'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemsQuote['ItemsQuote']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsQuote['Item']['name'], array('controller' => 'items', 'action' => 'view', $itemsQuote['Item']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quote'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsQuote['Quote']['id'], array('controller' => 'quotes', 'action' => 'view', $itemsQuote['Quote']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo h($itemsQuote['ItemsQuote']['detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($itemsQuote['ItemsQuote']['amount']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Items Quote'), array('action' => 'edit', $itemsQuote['ItemsQuote']['id']),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Items Quote'), array('action' => 'delete', $itemsQuote['ItemsQuote']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $itemsQuote['ItemsQuote']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items Quotes'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Items Quote'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotes'), array('controller' => 'quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quote'), array('controller' => 'quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
