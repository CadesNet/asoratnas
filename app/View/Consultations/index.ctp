<div class="consultations index">
	<h2><?php echo __('Consultations'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('message'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($consultations as $consultation): ?>
	<tr>
		<td><?php echo h($consultation['Consultation']['id']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['name']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['address']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['phone']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['email']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['message']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['created']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $consultation['Consultation']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $consultation['Consultation']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $consultation['Consultation']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $consultation['Consultation']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
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
		<li><?php echo $this->Html->link(__('New Consultation'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?></li>
	</ul>
</div>
