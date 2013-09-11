<div class="quotes view">
<h2><?php  echo __('Quote'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($quote['Quote']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($quote['Quote']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($quote['Quote']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($quote['Quote']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($quote['Quote']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($quote['Quote']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($quote['Quote']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($quote['Quote']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Quote'), array('action' => 'edit', $quote['Quote']['id']),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Quote'), array('action' => 'delete', $quote['Quote']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $quote['Quote']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotes'), array('action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quote'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('List Presentations Quotes'), array('controller' => 'presentations_quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presentations Quote'), array('controller' => 'presentations_quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Presentations Quotes'); ?></h3>
	<?php if (!empty($quote['PresentationsQuote'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Presentation Id'); ?></th>
		<th><?php echo __('Quote Id'); ?></th>
		<th><?php echo __('Detail'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($quote['PresentationsQuote'] as $presentationsQuote): ?>
		<tr>
			<td><?php echo $presentationsQuote['id']; ?></td>
			<td><?php echo $presentationsQuote['presentation_id']; ?></td>
			<td><?php echo $presentationsQuote['quote_id']; ?></td>
			<td><?php echo $presentationsQuote['detail']; ?></td>
			<td><?php echo $presentationsQuote['amount']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'presentations_quotes', 'action' => 'view', $presentationsQuote['id']),array('class' => 'ok btn btn-info btn-large')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'presentations_quotes', 'action' => 'edit', $presentationsQuote['id']),array('class' => 'ok btn btn-info btn-large')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'presentations_quotes', 'action' => 'delete', $presentationsQuote['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $presentationsQuote['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Presentations Quote'), array('controller' => 'presentations_quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> </li>
		</ul>
	</div>
</div>
