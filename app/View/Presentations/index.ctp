<div class="presentations index">
	<h2><?php echo __('Presentations'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($presentations as $presentation): ?>
	<tr>
		<td><?php echo h($presentation['Presentation']['id']); ?>&nbsp;</td>
		<td><?php echo h($presentation['Presentation']['name']); ?>&nbsp;</td>
		<td><?php echo h($presentation['Presentation']['descripcion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($presentation['Item']['name'], array('controller' => 'items', 'action' => 'view', $presentation['Item']['id']),array('class' => 'ok btn btn-info ')); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $presentation['Presentation']['id']),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $presentation['Presentation']['id']),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $presentation['Presentation']['id']),array('class' => 'ok btn btn-info '), __('Are you sure you want to delete # %s?', $presentation['Presentation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Presentation'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images Presentations'), array('controller' => 'images_presentations', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Images Presentation'), array('controller' => 'images_presentations', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Presentations Quotes'), array('controller' => 'presentations_quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presentations Quote'), array('controller' => 'presentations_quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
