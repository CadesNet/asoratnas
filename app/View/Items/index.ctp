<div class="items index">
	<h2><?php echo __('Productos'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('description','Descripción'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id','Cateogoria'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($items as $item): ?>
	<tr>
		<td><?php echo h($item['Item']['name']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($item['Category']['name'], array('controller' => 'categories', 'action' => 'view', $item['Category']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $item['Item']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $item['Item']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $item['Item']['id']),array('class' => 'ok btn btn-info btn-large'), __('Are you sure you want to delete # %s?', $item['Item']['id']),array('class' => 'ok btn btn-info btn-large')); ?>
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
	<h3><?php echo __('Acciones'); ?></h3>
	<?php echo $this->Html->link(__('New Item'), array('action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?>
		<?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> 
		<?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> 
		<?php echo $this->Html->link(__('List Images Items'), array('controller' => 'images_items', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> 
		<?php echo $this->Html->link(__('New Images Item'), array('controller' => 'images_items', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> 
		<?php echo $this->Html->link(__('List Quotes'), array('controller' => 'quotes', 'action' => 'index'),array('class' => 'ok btn btn-info btn-large')); ?> 
		<?php echo $this->Html->link(__('New Quote'), array('controller' => 'quotes', 'action' => 'add'),array('class' => 'ok btn btn-info btn-large')); ?> 
</div>
