<div class="presentationsQuotes index">
	<h2><?php echo __('Presentations Quotes'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('presentation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quote_id'); ?></th>
			<th><?php echo $this->Paginator->sort('detail'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($presentationsQuotes as $presentationsQuote): ?>
	<tr>
		<td><?php echo h($presentationsQuote['PresentationsQuote']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($presentationsQuote['Presentation']['name'], array('controller' => 'presentations', 'action' => 'view', $presentationsQuote['Presentation']['id']),array('class' => 'ok btn btn-info ')); ?>
		</td>
		<td>
			<?php echo $this->Html->link($presentationsQuote['Quote']['name'], array('controller' => 'quotes', 'action' => 'view', $presentationsQuote['Quote']['id'])); ?>
		</td>
		<td><?php echo h($presentationsQuote['PresentationsQuote']['detail']); ?>&nbsp;</td>
		<td><?php echo h($presentationsQuote['PresentationsQuote']['amount']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $presentationsQuote['PresentationsQuote']['id']),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $presentationsQuote['PresentationsQuote']['id']),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $presentationsQuote['PresentationsQuote']['id']),array('class' => 'ok btn btn-info '), __('Are you sure you want to delete # %s?', $presentationsQuote['PresentationsQuote']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Presentations Quote'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?></li>
		<li><?php echo $this->Html->link(__('List Presentations'), array('controller' => 'presentations', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presentation'), array('controller' => 'presentations', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotes'), array('controller' => 'quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quote'), array('controller' => 'quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
