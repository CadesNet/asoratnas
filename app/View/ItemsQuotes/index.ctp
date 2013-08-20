<div class="itemsQuotes index">
	<h2><?php echo __('Items Quotes'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quote_id'); ?></th>
			<th><?php echo $this->Paginator->sort('detail'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($itemsQuotes as $itemsQuote): ?>
	<tr>
		<td><?php echo h($itemsQuote['ItemsQuote']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($itemsQuote['Item']['name'], array('controller' => 'items', 'action' => 'view', $itemsQuote['Item']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($itemsQuote['Quote']['id'], array('controller' => 'quotes', 'action' => 'view', $itemsQuote['Quote']['id'])); ?>
		</td>
		<td><?php echo h($itemsQuote['ItemsQuote']['detail']); ?>&nbsp;</td>
		<td><?php echo h($itemsQuote['ItemsQuote']['amount']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itemsQuote['ItemsQuote']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemsQuote['ItemsQuote']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemsQuote['ItemsQuote']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $itemsQuote['ItemsQuote']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Items Quote'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotes'), array('controller' => 'quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quote'), array('controller' => 'quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
