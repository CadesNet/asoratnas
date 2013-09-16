<div class="quoteServices index">
	<h2><?php echo __('Quote Services'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
		
			<th><?php echo $this->Paginator->sort('fullname','Nombre completo'); ?></th>
			<th><?php echo $this->Paginator->sort('address','Direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('phone','Telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email','Email'); ?></th>
			<th><?php echo $this->Paginator->sort('issue','Razon'); ?></th>
			<th><?php echo $this->Paginator->sort('message','Mensaje'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Fecha de creacion'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Fecha de modificacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($quoteServices as $quoteService): ?>
	<tr>
		
		<td><?php echo h($quoteService['QuoteService']['fullname']); ?>&nbsp;</td>
		<td><?php echo h($quoteService['QuoteService']['address']); ?>&nbsp;</td>
		<td><?php echo h($quoteService['QuoteService']['phone']); ?>&nbsp;</td>
		<td><?php echo h($quoteService['QuoteService']['email']); ?>&nbsp;</td>
		<td><?php echo h($quoteService['QuoteService']['issue']); ?>&nbsp;</td>
		<td><?php echo h($quoteService['QuoteService']['message']); ?>&nbsp;</td>
		<td><?php echo h($quoteService['QuoteService']['created']); ?>&nbsp;</td>
		<td><?php echo h($quoteService['QuoteService']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $quoteService['QuoteService']['id']),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $quoteService['QuoteService']['id']),array('class' => 'ok btn btn-info ')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $quoteService['QuoteService']['id']),array('class' => 'ok btn btn-info '), __('Are you sure you want to delete # %s?', $quoteService['QuoteService']['id'])); ?>
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

 <p>&nbsp; </p>
 <p>&nbsp; </p>