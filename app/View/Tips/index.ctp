<div class="tips index">
	<h2><?php echo __('Tips'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('filename'); ?></th>
			<th><?php echo $this->Paginator->sort('dir'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tips as $tip): ?>
	<tr>
		<td><?php echo h($tip['Tip']['id']); ?>&nbsp;</td>
		<td><?php echo h($tip['Tip']['title']); ?>&nbsp;</td>
		<td><?php echo h($tip['Tip']['description']); ?>&nbsp;</td>
		<td><?php echo h($tip['Tip']['filename']); ?>&nbsp;</td>
		<td><?php echo h($tip['Tip']['dir']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tip['Tip']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tip['Tip']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tip['Tip']['id']), null, __('Are you sure you want to delete # %s?', $tip['Tip']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
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
		<li><?php echo $this->Html->link(__('New Tip'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
